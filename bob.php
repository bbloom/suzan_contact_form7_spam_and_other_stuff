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
        '.link',
        '.party',
        '.review',
        '.science',
        '.stream',
        '.xyz',
        '.zip',
        'blackberryartyom@gmail.com',
        'course-fitness.com',
        'dokumenciki.net',
        'financing',
        'hospitality',
        'itrafficlive',
        'marketing platform',
        'opportunity',
        'rokl.ink',
        'The Next Generation of AI',
        'yourmail',
        'youremail',
        
    ];
}
