<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class AboutSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            
            [
                'parent' => 'About',
                'label' => 'Page Subheading',
                'description' => 'Subheading of about page, shown below page title',
                'slug' => 'about-subheading',
                'type' => 'text',
                'value' => 'Superior Fitness - Empowering Your Fitness Journey',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Image 1',
                'description' => 'Shown as the first picture in the about page.',
                'slug' => 'about-image1',
                'type' => 'image',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Title 1',
                'description' => 'Title of first content block in the about page',
                'slug' => 'about-title1',
                'type' => 'text',
                'value' => 'Our Vision',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Subheading 1',
                'description' => 'Subheading of the first content block in the about page',
                'slug' => 'about-subheading1',
                'type' => 'text',
                'value' => 'Discover Our Fitness Mission',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Text 1',
                'description' => 'Text of the first content block in the about page',
                'slug' => 'about-content1',
                'type' => 'html',
                'value' => "At Superior Fitness, we believe that everyone deserves access to top-quality gym equipment and unparalleled services. Our vision is to empower individuals, whether you're a dedicated fitness enthusiast, a commercial gym owner, or someone just starting on your fitness journey, to live your healthiest life. We're here to support your every step, lift, and sprint towards a better you.",
            ],
            [
                'parent' => 'About',
                'label' => 'Content Image 2',
                'description' => 'Shown as the second picture in the about page.',
                'slug' => 'about-image2',
                'type' => 'image',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Title 2',
                'description' => 'Title of second content block in the about page',
                'slug' => 'about-title2',
                'type' => 'text',
                'value' => 'Our Commitment',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Subheading 2',
                'description' => 'Subheading of the second content block in about page',
                'slug' => 'about-subheading2',
                'type' => 'text',
                'value' => 'Uncompromising Quality',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Text 2',
                'description' => 'Text of the second content block in the about page',
                'slug' => 'about-content2',
                'type' => 'html',
                'value' => "What sets Superior Fitness apart is our unwavering commitment to excellence. We meticulously curate a vast range of gym equipment and accessories to cater to every fitness need. Our products undergo rigorous quality checks to ensure they meet the highest standards, so you can work out with confidence.",
            ],
            [
                'parent' => 'About',
                'label' => 'Content Image 3',
                'description' => 'Shown as the third picture in the about page.',
                'slug' => 'about-image3',
                'type' => 'image',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Title 3',
                'description' => 'Title of third content block in the about page',
                'slug' => 'about-title3',
                'type' => 'text',
                'value' => 'Why Choose Superior Fitness?',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Subheading 3',
                'description' => 'Subheading of the third content block in the about page',
                'slug' => 'about-subheading3',
                'type' => 'text',
                'value' => 'Because we are Superior, Superior Fitness',
            ],
            [
                'parent' => 'About',
                'label' => 'Content Text 3',
                'description' => 'Text of the third content block in about page',
                'slug' => 'about-content3',
                'type' => 'html',
                'value' => "Superior Fitness is more than a brand; it's a lifestyle. We're here to support, guide, and motivate you to be the best version of yourself. Whether you're aiming to build muscle, lose weight, or simply stay active, we've got the tools, expertise, and dedication to make your fitness dreams a reality. Join us in this exciting fitness journey, and together, we'll achieve greatness, one workout at a time. Welcome to Superior Fitness - where fitness meets excellence.",
            ],
            [
                'parent' => 'About',
                'label' => 'Closing Bubble',
                'description' => 'Text of the last bubble in the about page',
                'slug' => 'about-bubble',
                'type' => 'html',
                'value' => "<h4> Your Journey <br /> Starts <br /> Here! </h4>",
            ],
        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}