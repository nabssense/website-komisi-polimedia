<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
     public function index()
    {
        // Retrieve notifications with related news and their first images
        $notifications = Notification::with('news')->get();

        // Initialize an array to store image paths
        $firstImages = [];

        // Loop through each notification to get the first image of related news
        foreach ($notifications as $notification) {
            // Check if the related news has images
            if ($notification->news && !empty($notification->news->image)) {
                // Decode the JSON field 'image' into an array
                $images = json_decode($notification->news->image, true);

                // Get the first image path from the array and store it
                if (!empty($images)) {
                    $firstImages[$notification->news->id] = $images[0];
                } else {
                    $firstImages[$notification->news->id] = null;
                }
            } else {
                // If no news or no images, set the image path to null or handle accordingly
                $firstImages[$notification->news->id] = null;
            }
        }

        return view('pages.notifikasi.notifikasi', [
            'title' => 'Website Komisi | Notifikasi',
            'active' => 'Notifikasi',
            
            'notifications' => $notifications,
            'firstImages' => $firstImages, // Pass the array of first images to the view
        ]);
    }
}
