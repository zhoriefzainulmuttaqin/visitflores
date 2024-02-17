<?php

namespace App\Console\Commands;

use App\Models\Event;
use DateTime;
use Illuminate\Console\Command;

class DeleteExpiredEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-expired-events';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $events = Event::all();

        // Tentukan tanggal saat ini
        $currentDate = new DateTime();

        // Loop melalui setiap event
        foreach ($events as $event) {
            // Tentukan tanggal akhir event
            $endDate = new DateTime($event->end_date);

            // Hitung selisih hari antara tanggal akhir event dan tanggal saat ini
            $interval = $currentDate->diff($endDate);
            $daysDifference = $interval->days;

            // Jika selisih hari lebih dari 7 hari, hapus event
            if ($daysDifference > 7) {
                // Hapus event dan gambar cover
                unlink('public/assets/event/' . $event->cover_picture);
                $event->delete();
            }
        }
    }
}
