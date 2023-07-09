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
        'cyclist',
        'distributors',
        'domain',
        'einkommen',
        'erectile',
        'erection',
        'fake id',
        'fakeid',
        'facebook',
        'fuck',
        'hack',
        'investment',
        'investing',
        'joint ventures',
        'joint venture',
        'landing page',
        'luck',
        'lucky',
        'medical product',
        'naked',
        'neckbx',
        'nude',
        'passive',
        'passives',
        'project financing',
        'promote',
        'registration',
        'reputable',       
        'seo',
        'settlement',
        'urgent attention',
        'vidnami',
        'vidyourbiz',
        'winning notification',
        'viagra',
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
        'http://shorturl',
        'https://shorturl',
        'http://tinyurl',
        'https://tinyurl',
        'blackberryartyom@gmail.com',
        'boost your sales',
        'chatgpt4',
        'how to turn eyeballs into phone calls',
        'living proof that contact form advertising works',
        'course-fitness.com',
        'cutting edge',
        'cutting-edge',
        'dokumenciki.net',
        'financing',
        'free trial',
        'free-trial',
        'google analytics',
        'sites.google.com',
        'google.com',
        'great news',
        'growth service',
        'hospitality',
        'is your site generating leads for your business',
        'itrafficlive',
        'lead generation',
        'marketing platform',
        'mobile app',
        'opportunity',
        'rokl.ink',
        'sex',
        'The Next Generation of AI',
        'wordai',
        'url=',
        'working capital',
        'yourmail',
        'youremail',
    ];
}
