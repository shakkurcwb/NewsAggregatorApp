<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RssFeed;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        RssFeed::create([
            'title' => 'BBC News - Top Stories',
            'link' => 'http://feeds.bbci.co.uk/news/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'top stories, bbc, bbc news, uk news, world news',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'BBC News - World News',
            'link' => 'http://feeds.bbci.co.uk/news/world/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc, bbc news, uk news, world news',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Top Stories',
            'link' => 'http://rss.cnn.com/rss/cnn_topstories.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'top stories, cnn, cnn news, us news, world news, usa',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CNN News - World News',
            'link' => 'http://rss.cnn.com/rss/cnn_world.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'cnn, cnn news, us news, world news, usa',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'RT News - Top Stories',
            'link' => 'https://www.rt.com/rss/',
            'country' => 'RU',
            'language' => 'en',
            'tags' => 'top stories, rt, rt news, ru news, russia, world news',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Russia-today-logo.svg/1024px-Russia-today-logo.svg.png',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'RT News - World News',
            'link' => 'https://www.rt.com/rss/news/',
            'country' => 'RU',
            'language' => 'en',
            'tags' => 'rt, rt news, ru news, russia, world news',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Russia-today-logo.svg/1024px-Russia-today-logo.svg.png',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'Gazeta do Povo - Mundo',
            'link' => 'https://www.gazetadopovo.com.br/feed/rss/mundo.xml',
            'country' => 'BR',
            'language' => 'pt',
            'tags' => 'gazeta do povo, br news, brazil, parana, world news',
            'image_url' => 'http://www.logiarquitetura.com.br/wp-content/uploads/2015/01/LOGO-meta-image-gazeta-do-povo.jpg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'Globo News - Mundo',
            'link' => 'https://g1.globo.com/rss/g1/mundo/',
            'country' => 'BR',
            'language' => 'pt',
            'tags' => 'globo news, br news, brazil, world news',
            'image_url' => 'https://gkpb.com.br/wp-content/uploads/2022/08/novo-logo-globonews-destaque.jpg',
            'pulling_frequency' => 15,
        ]);

        /*
        RssFeed::create([
            'title' => 'China Daily - World News',
            'link' => 'http://www.chinadaily.com.cn/rss/world_rss.xml',
            'country' => 'CN',
            'language' => 'en',
            'tags' => 'china daily, china daily news, cn news, world news',
            'image_url' => 'http://www.chinadaily.com.cn/static/img/logo.png',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CCTV News - World News',
            'link' => 'http://english.cctv.com/rss/world.xml',
            'country' => 'CN',
            'language' => 'en',
            'tags' => 'cctv news, cctv news news, cn news, world news',
            'image_url' => 'http://english.cctv.com/images/logo.png',
            'pulling_frequency' => 15,
        ]);
        */

        RssFeed::create([
            'title' => 'CTV News - Top Stories',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-top-stories-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CTV News - World News',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-world-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Ottawa',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-ottawa-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, ottawa',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Toronto',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-toronto-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, toronto',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Montreal',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-montreal-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, montreal',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CBC News - Top Stories',
            'link' => 'http://rss.cbc.ca/lineup/topstories.xml',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'cbc news, cbc news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CBC_News/CBC_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);

        RssFeed::create([
            'title' => 'CBC News - World News',
            'link' => 'http://rss.cbc.ca/lineup/world.xml',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'cbc news, cbc news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CBC_News/CBC_News-Logo.wine.svg',
            'pulling_frequency' => 15,
        ]);
    }
}
