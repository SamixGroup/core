<?php

namespace Zetgram\Types;

use stdClass;

/*
Represents a video to be sent.

Source: https://core.telegram.org/bots/api#inputmediavideo
*/
class InputMediaVideo extends InputMedia
{
    /**
    * Type of the result, must be video
    * @var string
    */
    public string $type;

    /**
    * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
    * for Telegram to get a file from the Internet, or pass 'attach://<file_attach_name>' to upload a new one using
    * multipart/form-data under <file_attach_name> name.
    * @var string
    */
    public string $media;

    /**
    * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
    * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail�s width and height should not exceed
    * 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can�t be reused and can be only
    * uploaded as a new file, so you can pass 'attach://<file_attach_name>' if the thumbnail was uploaded using
    * multipart/form-data under <file_attach_name>.
    * @var InputFile|string
    */
    public ?mixed $thumb;

    /**
    * Caption of the video to be sent, 0-1024 characters
    * @var string
    */
    public ?string $caption;

    /**
    * Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
    * media caption.
    * @var string
    */
    public ?string $parseMode;

    /**
    * Video width
    * @var int
    */
    public ?int $width;

    /**
    * Video height
    * @var int
    */
    public ?int $height;

    /**
    * Video duration
    * @var int
    */
    public ?int $duration;

    /**
    * Pass True, if the uploaded video is suitable for streaming
    * @var bool
    */
    public ?bool $supportsStreaming;

    protected function build(stdClass $data)
    {
        $this->type = $data->type;
        $this->media = $data->media;
        if (isset($data->thumb)) {
            $this->thumb = $data->thumb;
        }
        if (isset($data->caption)) {
            $this->caption = $data->caption;
        }
        if (isset($data->parse_mode)) {
            $this->parseMode = $data->parse_mode;
        }
        if (isset($data->width)) {
            $this->width = $data->width;
        }
        if (isset($data->height)) {
            $this->height = $data->height;
        }
        if (isset($data->duration)) {
            $this->duration = $data->duration;
        }
        if (isset($data->supports_streaming)) {
            $this->supportsStreaming = $data->supports_streaming;
        }
    }
}