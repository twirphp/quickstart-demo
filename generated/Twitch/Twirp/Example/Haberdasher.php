<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.9.1)
# source: service.proto

declare(strict_types=1);

namespace Twitch\Twirp\Example;

/**
 * A Haberdasher makes hats for clients.
 *
 * Generated from protobuf service <code>twitch.twirp.example.Haberdasher</code>
 */
interface Haberdasher
{
    /**
     * MakeHat produces a hat of mysterious, randomly-selected color!
     *
     * Generated from protobuf method <code>twitch.twirp.example.Haberdasher/MakeHat</code>
     *
     * @throws \Twirp\Error
     */
    public function MakeHat(array $ctx, \Twitch\Twirp\Example\Size $req): \Twitch\Twirp\Example\Hat;
}
