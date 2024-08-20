<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Xot\Models\CacheLock.
 *
 * @property string $key
 * @property string $owner
<<<<<<< HEAD
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 *
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock newModelQuery()
 * @method static Builder|CacheLock newQuery()
 * @method static Builder|CacheLock query()
 * @method static Builder|CacheLock whereExpiration($value)
 * @method static Builder|CacheLock whereKey($value)
 * @method static Builder|CacheLock whereOwner($value)
 *
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
=======
 * @property int    $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock                                newModelQuery()
 * @method static Builder|CacheLock                                newQuery()
 * @method static Builder|CacheLock                                query()
 * @method static Builder|CacheLock                                whereExpiration($value)
 * @method static Builder|CacheLock                                whereKey($value)
 * @method static Builder|CacheLock                                whereOwner($value)
 *
 * @property int $expiration
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock                                newModelQuery()
 * @method static Builder|CacheLock                                newQuery()
 * @method static Builder|CacheLock                                query()
 * @method static Builder|CacheLock                                whereExpiration($value)
 * @method static Builder|CacheLock                                whereKey($value)
 * @method static Builder|CacheLock                                whereOwner($value)
>>>>>>> d7d5c20 (Check & fix styling)
 *
 * @mixin \Eloquent
 */
class CacheLock extends BaseModel
{
    /** @var array<int, string> */
    protected $fillable = [
        'key',
        'owner',
        'expiration',
    ];
}
