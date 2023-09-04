<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Modules\Notify\Actions\NetfunSendAction;
use Modules\Notify\Notifications\ThemeNotification;
use Modules\Xot\Contracts\ModelContactContract;

class NetfunChannel
{
    public function __construct()
    {
=======
=======
declare(strict_types=1);
>>>>>>> bc60653 (up)

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\NetfunSendAction;

class NetfunChannel {
<<<<<<< HEAD

    public function __construct(){
       
>>>>>>> 48d3f55 (up)
=======
    public function __construct() {
>>>>>>> bc60653 (up)
    }

    /**
     * Send the given notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  \Modules\Notify\Contracts\CanThemeNotificationContract  $notifiable
     * @return void
     */
    public function send($notifiable, ThemeNotification $notification)
    {
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

        if ($notifiable instanceof ModelContactContract) {
            $notifiable->increase('sms', $data);
            /*
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
            */
        }
    }
}
=======
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
=======
     * @param mixed $notifiable
     *
>>>>>>> bc60653 (up)
     * @return void
     */
    public function send($notifiable, Notification $notification) {
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(NetfunSendAction::class)->execute($message);

        if ($notifiable instanceof Model) {
            $data['sms_sent_at'] = now();
            $data['sms_count'] = $notifiable->sms_count + 1;
            $notifiable->update($data);
        }
    }
}
<<<<<<< HEAD
>>>>>>> 48d3f55 (up)
=======
>>>>>>> bc60653 (up)
