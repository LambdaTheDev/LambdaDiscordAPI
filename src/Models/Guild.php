<?php


namespace LDA\Models;


class Guild
{
    public string $id;
    public string $name;
    public ?string $icon;
    public ?string $icon_hash;
    public ?string $splash;
    public ?string $discovery_splash;
    public int $owner_id;
    public string $region;
    public ?string $afk_channel_id;
    public int $afk_timeout;
    public bool $widget_enabled;
    public ?string $widget_channel_id;
    public int $verification_level;
    public int $default_message_notifications;
    public int $explicit_content_filter;
    public array $roles;
    public array $emojis;
    public array $features;
    public int $mfa_level;
    public ?int $application_id;
    public ?string $system_channel_id;
    public int $system_channel_flags;
    public ?string $rules_channel_id;
    public ?int $max_presences;
    public int $max_members;
    public ?string $vanity_url_code;
    public ?string $description;
    public ?string $banner;
    public int $premium_tier;
    public int $premium_subscription_count;
    public string $preferred_locale;
    public ?string $public_updates_channel_id;
    public int $max_video_channel_users;
    public int $approximate_member_count;
    public int $approximate_presence_count;

    /**
     * Guild constructor.
     * @param string $id
     * @param string $name
     * @param string|null $icon
     * @param string|null $icon_hash
     * @param string|null $splash
     * @param string|null $discovery_splash
     * @param int $owner_id
     * @param string $region
     * @param string|null $afk_channel_id
     * @param int $afk_timeout
     * @param bool $widget_enabled
     * @param string|null $widget_channel_id
     * @param int $verification_level
     * @param int $default_message_notifications
     * @param int $explicit_content_filter
     * @param array $roles
     * @param array $emojis
     * @param array $features
     * @param int $mfa_level
     * @param int|null $application_id
     * @param string|null $system_channel_id
     * @param int $system_channel_flags
     * @param string|null $rules_channel_id
     * @param int|null $max_presences
     * @param int $max_members
     * @param string|null $vanity_url_code
     * @param string|null $description
     * @param string|null $banner
     * @param int $premium_tier
     * @param int $premium_subscription_count
     * @param string $preferred_locale
     * @param string|null $public_updates_channel_id
     * @param int $max_video_channel_users
     * @param int $approximate_member_count
     * @param int $approximate_presence_count
     */
    public function __construct(string $id, string $name, ?string $icon, ?string $icon_hash, ?string $splash, ?string $discovery_splash, int $owner_id, string $region, ?string $afk_channel_id, int $afk_timeout, bool $widget_enabled, ?string $widget_channel_id, int $verification_level, int $default_message_notifications, int $explicit_content_filter, array $roles, array $emojis, array $features, int $mfa_level, ?int $application_id, ?string $system_channel_id, int $system_channel_flags, ?string $rules_channel_id, ?int $max_presences, int $max_members, ?string $vanity_url_code, ?string $description, ?string $banner, int $premium_tier, int $premium_subscription_count, string $preferred_locale, ?string $public_updates_channel_id, int $max_video_channel_users, int $approximate_member_count, int $approximate_presence_count)
    {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->icon_hash = $icon_hash;
        $this->splash = $splash;
        $this->discovery_splash = $discovery_splash;
        $this->owner_id = $owner_id;
        $this->region = $region;
        $this->afk_channel_id = $afk_channel_id;
        $this->afk_timeout = $afk_timeout;
        $this->widget_enabled = $widget_enabled;
        $this->widget_channel_id = $widget_channel_id;
        $this->verification_level = $verification_level;
        $this->default_message_notifications = $default_message_notifications;
        $this->explicit_content_filter = $explicit_content_filter;
        $this->roles = $roles;
        $this->emojis = $emojis;
        $this->features = $features;
        $this->mfa_level = $mfa_level;
        $this->application_id = $application_id;
        $this->system_channel_id = $system_channel_id;
        $this->system_channel_flags = $system_channel_flags;
        $this->rules_channel_id = $rules_channel_id;
        $this->max_presences = $max_presences;
        $this->max_members = $max_members;
        $this->vanity_url_code = $vanity_url_code;
        $this->description = $description;
        $this->banner = $banner;
        $this->premium_tier = $premium_tier;
        $this->premium_subscription_count = $premium_subscription_count;
        $this->preferred_locale = $preferred_locale;
        $this->public_updates_channel_id = $public_updates_channel_id;
        $this->max_video_channel_users = $max_video_channel_users;
        $this->approximate_member_count = $approximate_member_count;
        $this->approximate_presence_count = $approximate_presence_count;
    }
}