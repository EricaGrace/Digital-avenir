<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index()
    {
        $menu = [
            ['label' => 'Home', 'href' => '#home'],
            ['label' => 'Services', 'href' => '#services'],
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Portfolio', 'href' => '#gallery'],
            ['label' => 'Testimonials', 'href' => '#testimonials'],
            ['label' => 'Blog', 'href' => '#blog'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];

        $services = [
            ['icon' => '📱', 'title' => 'Mobile Development', 'text' => 'Apps natives et hybrides sur mesure.'],
            ['icon' => '📊', 'title' => 'Business Analytics', 'text' => 'Tableaux de bord et data‑viz.'],
            ['icon' => '🚀', 'title' => 'Digital Marketing', 'text' => 'SEO/SEA & automation.'],
            ['icon' => '🧩', 'title' => 'Custom Software', 'text' => 'Solutions métier spécifiques.'],
            ['icon' => '🎨', 'title' => 'Branding & UI/UX', 'text' => 'Identité de marque & design.'],
            ['icon' => '🌐', 'title' => 'Web Development', 'text' => 'Sites performants & accessibles.'],
        ];

        $stats = [
            ['value' => 100, 'suffix' => '+', 'label' => 'Happy Customers'],
            ['value' => 594, 'suffix' => '+', 'label' => 'Winning Awards'],
            ['value' => 1250, 'suffix' => '+', 'label' => 'Projects Done'],
            ['value' => 997, 'suffix' => '+', 'label' => 'Trusted Support'],
        ];

        $gallery = [
            'images/captured-1.jpg',
            'images/captured-2.jpg',
            'images/captured-3.jpg',
            'images/captured-4.jpg',
            'images/captured-5.jpg',
            'images/captured-6.jpg',
        ];

        $testimonials = [
            [
                'name' => 'Micheal Wong',
                'rating' => 5,
                'text'  => 'Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.',
            ],
            [
                'name' => 'Sara Kim',
                'rating' => 5,
                'text'  => 'Nunc egestas augue at pellentesque laoreet, felis eros vehicula leo.',
            ],
            [
                'name' => 'Jean Dupont',
                'rating' => 4,
                'text'  => 'Phasellus volutpat metus eget egestas mollis, lacus blandit dui.',
            ],
        ];

        $posts = [
            [
                'title'  => 'The Power of Branding: How to Stand Out',
                'excerpt'=> 'Phasellus ullamcorper ipsum rutrum nunc. Donec mollis hendrerit risus.',
                'image'  => 'images/blog-1.jpg',
                'href'   => '#',
            ],
            [
                'title'  => 'Essential Financial Tips for Growth',
                'excerpt'=> 'Ut id nisl quis enim dignissim sagittis. Nam ipsum risus.',
                'image'  => 'images/blog-2.jpg',
                'href'   => '#',
            ],
            [
                'title'  => 'Smart Digital Marketing to Scale',
                'excerpt'=> 'Curabitur nisi. Cum sociis natoque penatibus et magnis dis.',
                'image'  => 'images/blog-3.jpg',
                'href'   => '#',
            ],
        ];

        return $this->render('home/index.html.twig', compact(
            'menu', 'services', 'stats', 'gallery', 'testimonials', 'posts'
        ));
    }
}
