<?php

namespace Telegram\Bot\Objects;

/**
 * Class ChatInviteLink.
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * @property string $invite_link                Required. The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @property User   $creator                    Required. Creator of the link
 * @property bool   $creates_join_request       Required. True, if users joining the chat via the link need to be approved by chat administrators
 * @property bool   $is_primary                 Required. True, if the link is primary
 * @property bool   $is_revoked                 Required. True, if the link is revoked
 * @property string $name                       (Optional). Invite link name
 * @property int    $expire_date                (Optional). Point in time (Unix timestamp) when the link will expire or has been expired
 * @property int    $member_limit               (Optional). Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property int    $pending_join_request_count (Optional). Number of pending join requests created using this link
 */
class ChatInviteLink extends AbstractResponseObject
{
    public function relations(): array
    {
        return [
            'creator' => User::class,
        ];
    }
}
