<?php

namespace App\View\Components;

use App\Menu;
use App\MenuItem;
use App\Models\Article;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;

    public $navigationMenu;

    public $footerArticles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->title = $title ?? 'Thái Hà Group';

        $this->navigationMenu = new Menu(collect([
            new MenuItem('/gioi-thieu', 'GIỚI THIỆU'),
            new MenuItem('/ho-tro', 'HỖ TRỢ'),
            new MenuItem('/tin-tuc', 'TIN TỨC'),
            new MenuItem('/khach-hang', 'KHÁCH HÀNG'),
            new MenuItem('/doi-tac', 'ĐỐI TÁC'),
            new MenuItem('/giai-phap', 'GIẢI PHÁP'),
            new MenuItem('/dich-vu', 'DỊCH VỤ'),
            new MenuItem('/lien-he', 'LIÊN HỆ'),
        ]));

        $this->footerArticles = Article::take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
