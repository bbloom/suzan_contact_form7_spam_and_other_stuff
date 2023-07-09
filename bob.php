<?php

// THE BODY CONTAINS THE FROM EMAIL ADDRESS WITHIN IT.
// THE BODY ALSO CONTAINS THE SUBJECT LINE AND MESSAGE.
// SO IT IS ALL IN ONE SINGLE VARIABLE. SO JUST CHECK THE VARIABLE
// FOR FORBIDDEN STUFF

function isEmailOkToSend($body)
{
    foreach (rejectedStuff() as $rejecting) {
        
        if (str_contains(mb_strtolower($body), strtolower($rejecting))) {
            return false;
        }
    }
    
    return true;
}

function rejectedStuff()
{
    return [
        'agency',
        'babylon',
        'belarus',
        'bible',
        'bitcoin',
        'blackberryartyom@gmail.com',
        'boost your sales',
        'chatgpt4',
        'course-fitness.com',
        'cutting edge',
        'cutting-edge',
        'cyclist',
        'distributors',
        'dokumenciki.net',
        'domain',
        'einkommen',
        'erectile',
        'erection',
        'fake id',
        'fakeid',
        'facebook',
        'financing',
        'free trial',
        'free-trial',
        'fuck',
        'google analytics',
        'sites.google.com',
        'google.com',
        'great news',
        'growth service',
        'hack',
        'hard work',
        'hospitality',
        'how to turn eyeballs into phone calls',
        'http://shorturl',
        'https://shorturl',
        'http://tinyurl',
        'https://tinyurl',
        'is your site generating leads for your business',
        'investment',
        'investing',
        'itrafficlive',
        'joint ventures',
        'joint venture',
        'landing page',
        'lead generation',
        'living proof that contact form advertising works',
        'luck',
        'lucky',
        'marketing',
        'marketing platform',
        'medical product',
        'mobile app',
        'naked',
        'neckbx',
        'nude',
        'opportunity',
        'passive',
        'passives',
        'penis',
        'project financing',
        'promote',
        'registration',
        'reputable',
        'rokl.ink',
        'seo',
        'settlement',
        'sex',
        'shit',
        'the next generation of ai',
        'url=',
        'urgent attention',
        'viagra',
        'vidnami',
        'vidyourbiz',
        'winning notification',
        'wordai',
        'working capital',
        'yourmail',
        'youremail',        
        '.cn',
        '.ru',
        '.su',
        '.bid',
        '.click',
        '.diet',
        '.download',
        '.ir',
        '.link',
        '.online',
        '.party',
        '.review',
        '.science',
        '.store',
        '.stream',
        '.xyz',
        '.zip',
    ];
}
