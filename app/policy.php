<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class policy extends Model
{
    //
    protected $table = 'policy';
    protected $primaryKey = 'unique_id';
   
    protected $fillable = ['url','link','policy_name','type','unique_id','c_id','s_id','platforms','platforms_other','mobile_name','website_url','ebook_name','landing_url','course_name','podcast_name','video_name','premium','company','company_name','users','fair_use','formatting','instructions','privacy_policy','privacy_policy_url','essential','functionality','third_party','ads','cookies_ads_personal_info','cookies_analytical','cookies_social','cookies_disable','beacons','register','register_social','info_access','info_delete','info_delete_method','interact','info_visible','writer','original','specialty','copy','share','accept','identify','influence','anon_use','publish','monitor','reuse','terminate','testimonials','modify','compensate','affiliate_links','affiliate_links_amazon','advise','accuracy','modifications','objectionable','remove','age','adult','adult_content_warn','sell','payments_method','payments_store','diff_name','upload','execute','install','send','bulk','purchased','suspend','monitor_a','marketing','terminate_a','action','court','share_user','share_others','liability','counterr','formattingg','instructionss','liabilityy','notifyy','suspendd','backup','backup_fee','backup_guarantee','actions','contacts','contact_form','contact_email','contact_address','notify','remote','remote_share','types','trials','trials_days','trials_functional','days','money_back','conditions','refuse','prorate','offer','fee','recurring','auto_renewal','uptime_guarantee','downtime_compensation','payments_security','cookiess','cookies_none','dnt','guarantees','rights','newsletters','misc_clauses','california','europe','teens','children','children_info','children_info_misc','remarketing','newsletters_remote','newsletters_unsubscr','info','geo','features','derivative','purpose','sell_a','merger','law','breach','editor','email','adminn','newunique'];

    public $timestamps = false;
}
