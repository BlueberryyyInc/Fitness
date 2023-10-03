<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class ContactSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            
            [
                'parent' => 'Contact',
                'label' => 'Business Name',
                'description' => 'Name of your business',
                'slug' => 'contact-name',
                'type' => 'text',
                'value' => 'Superior Fitness',
            ],
            [
                'parent' => 'Contact',
                'label' => 'Address',
                'description' => 'Address of your business',
                'slug' => 'contact-address',
                'type' => 'text',
                'value' => '100 Superior Fitness Way, Melbourne, Victoria',
            ],
            [
                'parent' => 'Contact',
                'label' => 'Buisness Number',
                'description' => 'Contact Number of your business',
                'slug' => 'contact-number',
                'type' => 'text',
                'value' => '05757575',
            ],
            [
                'parent' => 'Contact',
                'label' => 'Email',
                'description' => 'Email address of your business',
                'slug' => 'contact-email',
                'type' => 'text',
                'value' => 'damien@superiorfitness.com',
            ],
            [
                'parent' => 'Contact',
                'label' => 'Opening Hours Table',
                'description' => 'Alter the opening hours of your business here',
                'slug' => 'contact-hours',
                'type' => 'html',
                'value' => '<table class="table mt-4">
                <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Opening Time</th>
                    <th scope="col">Closing Time</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Monday</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>9:00 AM</td>
                    <td>5:00 PM</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>10:00 AM</td>
                    <td>3:00 PM</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Closed</td>
                    <td>Closed</td>
                </tr>
                </tbody>
            </table>',
            ],
        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}