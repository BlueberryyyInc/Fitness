<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class CustomersSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'parent' => 'Global',
                'label' => 'Website Title',
                'description' => 'Shown on the home page, as well as any tabs in the users browser.',
                'slug' => 'website-title',
                'type' => 'text',
                'value' => 'Superior Fitness',
            ],
            [
                'parent' => 'Global',
                'label' => 'Copyright Message',
                'description' => 'Copyright information shown at the bottom of all pages.',
                'slug' => 'copyright-message',
                'type' => 'text',
                'value' => 'Copyright © Superior Fitness 2023',
            ],
            [
                'parent' => 'Home',
                'label' => 'Logo',
                'description' => 'Shown in the centre of the home page.',
                'slug' => 'logo',
                'type' => 'image',
            ],
            [
                'parent' => 'Home',
                'label' => 'Home Page Slogan',
                'description' => 'The Slogan of the company, shown in home page',
                'slug' => 'home-slogan',
                'type' => 'text',
                'value' => 'Empowerment, Strength, Potential',
            ],
            [
                'parent' => 'Home',
                'label' => 'Home Page Content Title',
                'description' => 'Title of home screen content',
                'slug' => 'home-heading',
                'type' => 'text',
                'value' => 'Services',
            ],
            [
                'parent' => 'Home',
                'label' => 'Home Page Content Subheading',
                'description' => 'Subheading of home screen content',
                'slug' => 'home-subheading',
                'type' => 'text',
                'value' => 'We make fitness accessible for ameteurs and professionals.',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 1 Icon',
                'description' => 'Icon of content 1 find icons here: https://fontawesome.com/icons',
                'slug' => 'content-icon1',
                'type' => 'html',
                'value' => '<i class="fas fa-truck fa-stack-1x fa-inverse"></i>',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 1 Title',
                'description' => 'Title of content 1',
                'slug' => 'content-title1',
                'type' => 'text',
                'value' => 'Home Delivery',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 1 Text',
                'description' => 'Text of content 1',
                'slug' => 'content-text1',
                'type' => 'html',
                'value' => 'We help you set up your home gym purchases to create the home fitness environment that will allow you to reach all of your goals.',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 2 Icon',
                'description' => 'Icon of content 2 find icons here: https://fontawesome.com/icons',
                'slug' => 'content-icon2',
                'type' => 'html',
                'value' => '<i class="fas fa-building fa-stack-1x fa-inverse"></i>',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 2 Title',
                'description' => 'Title of content 2',
                'slug' => 'content-title2',
                'type' => 'text',
                'value' => 'Wholesale',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 2 Text',
                'description' => 'Text of content 2',
                'slug' => 'content-text2',
                'type' => 'html',
                'value' => 'We can help you build your ideal fitness centre to support your business in providing fitness services to your clients.',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 3 Icon',
                'description' => 'Icon of content 3 find icons here: https://fontawesome.com/icons',
                'slug' => 'content-icon3',
                'type' => 'html',
                'value' => '<i class="fas fa-cogs fa-stack-1x fa-inverse"></i>',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 3 Title',
                'description' => 'Title of content 3',
                'slug' => 'content-title3',
                'type' => 'text',
                'value' => 'Repair',
            ],
            [
                'parent' => 'Home',
                'label' => 'Content 3 Text',
                'description' => 'Text of content 3',
                'slug' => 'content-text3',
                'type' => 'html',
                'value' => 'While we stock quality products, repairs are sometimes necessary. As such, we provide extensive repair services for the products that we sell.',
            ],
        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}