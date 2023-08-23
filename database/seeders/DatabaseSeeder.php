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
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'BBC News - World News',
            'link' => 'http://feeds.bbci.co.uk/news/world/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc, bbc news, uk news, world news',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - UK
        RssFeed::create([
            'title' => 'BBC News - UK',
            'link' => 'http://feeds.bbci.co.uk/news/uk/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, uk news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Business
        RssFeed::create([
            'title' => 'BBC News - Business',
            'link' => 'http://feeds.bbci.co.uk/news/business/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, business news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Politics
        RssFeed::create([
            'title' => 'BBC News - Politics',
            'link' => 'http://feeds.bbci.co.uk/news/politics/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, politics news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Health
        RssFeed::create([
            'title' => 'BBC News - Health',
            'link' => 'http://feeds.bbci.co.uk/news/health/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, health news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Education & Family
        RssFeed::create([
            'title' => 'BBC News - Education & Family',
            'link' => 'http://feeds.bbci.co.uk/news/education/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, education news, family news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Science & Environment
        RssFeed::create([
            'title' => 'BBC News - Science & Environment',
            'link' => 'http://feeds.bbci.co.uk/news/science_and_environment/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, science news, environment news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Technology
        RssFeed::create([
            'title' => 'BBC News - Technology',
            'link' => 'http://feeds.bbci.co.uk/news/technology/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, technology news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);

        // BBC News - Entertainment & Arts
        RssFeed::create([
            'title' => 'BBC News - Entertainment & Arts',
            'link' => 'http://feeds.bbci.co.uk/news/entertainment_and_arts/rss.xml',
            'country' => 'UK',
            'language' => 'en',
            'tags' => 'bbc news, entertainment news, arts news, uk',
            'image_url' => 'https://logos-world.net/wp-content/uploads/2022/01/BBC-Emblem.png',
            'pulling_frequency' => 5,
        ]);


        RssFeed::create([
            'title' => 'CNN News - Top Stories',
            'link' => 'http://rss.cnn.com/rss/cnn_topstories.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'top stories, cnn, cnn news, us news, world news, usa',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - World News',
            'link' => 'http://rss.cnn.com/rss/cnn_world.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'cnn, cnn news, us news, world news, usa',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - U.S.',
            'link' => 'http://rss.cnn.com/rss/cnn_us.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'us, cnn',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Business',
            'link' => 'http://rss.cnn.com/rss/money_latest.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'business, cnn, money',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Politics',
            'link' => 'http://rss.cnn.com/rss/cnn_allpolitics.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'politics, cnn',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Technology',
            'link' => 'http://rss.cnn.com/rss/cnn_tech.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'technology, cnn',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);
        
        RssFeed::create([
            'title' => 'CNN News - Health',
            'link' => 'http://rss.cnn.com/rss/cnn_health.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'health, cnn',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Entertainment',
            'link' => 'http://rss.cnn.com/rss/cnn_showbiz.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'entertainment, cnn, showbiz',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CNN News - Travel',
            'link' => 'http://rss.cnn.com/rss/cnn_travel.rss',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'travel, cnn',
            'image_url' => 'https://www.logodesignlove.com/wp-content/uploads/2010/06/cnn-logo-white-on-red.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'RT News - Top Stories',
            'link' => 'https://www.rt.com/rss/',
            'country' => 'RU',
            'language' => 'en',
            'tags' => 'top stories, rt, rt news, ru news, russia, world news',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Russia-today-logo.svg/1024px-Russia-today-logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'RT News - World News',
            'link' => 'https://www.rt.com/rss/news/',
            'country' => 'RU',
            'language' => 'en',
            'tags' => 'rt, rt news, ru news, russia, world news',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Russia-today-logo.svg/1024px-Russia-today-logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'Gazeta do Povo - Mundo',
            'link' => 'https://www.gazetadopovo.com.br/feed/rss/mundo.xml',
            'country' => 'BR',
            'language' => 'pt',
            'tags' => 'gazeta do povo, br news, brazil, parana, world news',
            'image_url' => 'http://www.logiarquitetura.com.br/wp-content/uploads/2015/01/LOGO-meta-image-gazeta-do-povo.jpg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'Globo News - Mundo',
            'link' => 'https://g1.globo.com/rss/g1/mundo/',
            'country' => 'BR',
            'language' => 'pt',
            'tags' => 'globo news, br news, brazil, world news',
            'image_url' => 'https://gkpb.com.br/wp-content/uploads/2022/08/novo-logo-globonews-destaque.jpg',
            'pulling_frequency' => 5,
        ]);

        /*
        RssFeed::create([
            'title' => 'China Daily - World News',
            'link' => 'http://www.chinadaily.com.cn/rss/world_rss.xml',
            'country' => 'CN',
            'language' => 'en',
            'tags' => 'china daily, china daily news, cn news, world news',
            'image_url' => 'http://www.chinadaily.com.cn/static/img/logo.png',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CCTV News - World News',
            'link' => 'http://english.cctv.com/rss/world.xml',
            'country' => 'CN',
            'language' => 'en',
            'tags' => 'cctv news, cctv news news, cn news, world news',
            'image_url' => 'http://english.cctv.com/images/logo.png',
            'pulling_frequency' => 5,
        ]);
        */

        RssFeed::create([
            'title' => 'CTV News - Top Stories',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-top-stories-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CTV News - World News',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-world-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Ottawa',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-ottawa-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, ottawa',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Toronto',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-toronto-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, toronto',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CTV News - Montreal',
            'link' => 'https://www.ctvnews.ca/rss/ctvnews-ca-montreal-public-rss-1.822009',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'ctv news, ctv news news, ca news, regional news, canada, montreal',
            'image_url' => 'https://www.logo.wine/a/logo/CTV_News/CTV_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CBC News - Top Stories',
            'link' => 'http://rss.cbc.ca/lineup/topstories.xml',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'cbc news, cbc news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CBC_News/CBC_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        RssFeed::create([
            'title' => 'CBC News - World News',
            'link' => 'http://rss.cbc.ca/lineup/world.xml',
            'country' => 'CA',
            'language' => 'en',
            'tags' => 'cbc news, cbc news news, ca news, world news, canada',
            'image_url' => 'https://www.logo.wine/a/logo/CBC_News/CBC_News-Logo.wine.svg',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Top Stories
        RssFeed::create([
            'title' => 'Fox News - Top Stories',
            'link' => 'https://moxie.foxnews.com/google-publisher/latest.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'top stories, fox news, us news, world news, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - World News
        RssFeed::create([
            'title' => 'Fox News - World News',
            'link' => 'https://moxie.foxnews.com/google-publisher/world.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, us news, world news, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - U.S. News
        RssFeed::create([
            'title' => 'Fox News - U.S. News',
            'link' => 'https://moxie.foxnews.com/google-publisher/us.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, us news, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Politics
        RssFeed::create([
            'title' => 'Fox News - Politics',
            'link' => 'https://moxie.foxnews.com/google-publisher/politics.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, politics, us politics, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Science
        RssFeed::create([
            'title' => 'Fox News - Science',
            'link' => 'https://moxie.foxnews.com/google-publisher/science.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, science, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Health
        RssFeed::create([
            'title' => 'Fox News - Health',
            'link' => 'https://moxie.foxnews.com/google-publisher/health.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, health, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Sports
        RssFeed::create([
            'title' => 'Fox News - Sports',
            'link' => 'https://moxie.foxnews.com/google-publisher/sports.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, sports, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Travel
        RssFeed::create([
            'title' => 'Fox News - Travel',
            'link' => 'https://moxie.foxnews.com/google-publisher/travel.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, travel, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Tech
        RssFeed::create([
            'title' => 'Fox News - Tech',
            'link' => 'https://moxie.foxnews.com/google-publisher/tech.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, tech, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Opinion
        RssFeed::create([
            'title' => 'Fox News - Opinion',
            'link' => 'https://moxie.foxnews.com/google-publisher/opinion.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, opinion, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);

        // Fox News - Video
        RssFeed::create([
            'title' => 'Fox News - Video',
            'link' => 'https://moxie.foxnews.com/google-publisher/videos.xml',
            'country' => 'US',
            'language' => 'en',
            'tags' => 'fox news, videos, usa',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Fox_News_Channel_logo.svg/1024px-Fox_News_Channel_logo.svg.png',
            'pulling_frequency' => 5,
        ]);
    }
}
