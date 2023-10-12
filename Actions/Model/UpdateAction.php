<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Spatie\QueueableAction\QueueableAction;

class UpdateAction
{
    use QueueableAction;

    public function execute(Model $model, array $data, array $rules): Model
    {
        $validator = Validator::make($data, $rules);
        $validator->validate();

        // dddx($data);
        if (null === $model->getKey()) {
            $keyName = $model->getKeyName();
            $key = $data[$keyName];
            $data = collect($data)->except($keyName)->toArray();
            $row = $model->firstWhere([$keyName => $key]);
            dddx($row);
            /*
            try {
                $model = $model->firstOrCreate([$keyName => $key], $data);
            } catch (\Exception $e) {
                dddx(['e' => $e->getMessage(),
                    'model' => $model,
                    'keyName' => $keyName,
                    'key' => $key,
                ]);
            }
            if ($model->{$keyName} !== $key) {
                $model->{$keyName} = $key;
                $model->save();
            }
            */
        }

        try {
            $model = tap($model)->update($data);
        } catch (\Exception $exception) {
            if ('Node must exists.' === $exception->getMessage()) {
                app($model::class)->fixTree();
                $model = tap($model)->update($data);
            } else {
                dddx(['exception' => $exception]);
            }
        }

        app(__NAMESPACE__.'\\Update\RelationAction')->execute($model, $data);

        $msg = 'aggiornato! ['.$model->getKey().']!'; // .'['.implode(',',$row->getChanges()).']';

        Session::flash('status', $msg); // .

        return $model;
    }
}
