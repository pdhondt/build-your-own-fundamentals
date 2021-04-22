<?php


class ArticleController
{
    public function render(array $GET, array $POST): void
    {

        $article_1 = new Article(1, 'Cake ipsum', 'cake-ipsum', 'Soufflé marzipan bear claw marshmallow pastry chocolate bar topping. Jelly biscuit cotton candy pudding sweet roll cupcake. Jelly-o oat cake candy canes cotton candy cake caramels. Carrot cake chocolate cake bear claw apple pie chocolate bar gummi bears pastry brownie.');
        $article_2 = new Article(2, 'Tiramisu muffin macaroon', 'tiramisu-muffin-macaroon', 'Powder icing candy canes tiramisu muffin macaroon sesame snaps. Jelly halvah donut chocolate cake brownie cake gingerbread donut icing. Pie jelly chupa chups caramels danish soufflé. Tart liquorice bear claw cheesecake powder. Sweet jelly powder apple pie bear claw. Wafer donut pudding powder pie soufflé. Macaroon jelly beans croissant ice cream wafer sweet sugar plum bear claw gingerbread.');
        $article_3 = new Article(3, 'Koen sleep statistics', 'koen-sleep-statistics', 'We are still waiting for data to come him. He might have fallen asleep while sending them.');
        $article_4 = new Article(4, 'Lamarr 4 breaks coding world record', 'lamarr-4-breaks-coding-world-record', 'We don\'t know how they managed it, but they sure did.');

        $articles = [$article_1, $article_2, $article_3, $article_4];

        if ($_GET['page'] === 'article-detail' && !empty($_GET['article_slug'])) {
            $article = null;

            foreach ($articles as $articleToCheck) {
                if ($articleToCheck->getSlug() === $_GET['article_slug']) {
                    $article = $articleToCheck;
                }
            }
            require 'View/articledetail.php';
        } else {
            require 'View/articles.php';
        }

    }

}