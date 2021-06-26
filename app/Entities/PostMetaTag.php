<?php

namespace App\Entities;

/**
 * Class PostMetaTag
 * @package App\Entities
 *
 * Value-Object representing Wink's post meta-tags.
 */
class PostMetaTag
{
    public function __construct(
        public ?string $metaDescription,
        public ?string $openGraphTitle,
        public ?string $openGraphDescription,
        public ?string $openGraphImage,
        public ?string $openGraphImageWidth,
        public ?string $openGraphImageHeight,
        public ?string $twitterTitle,
        public ?string $twitterDescription,
        public ?string $twitterImage,
    ) {
    }

    public static function createFromArray(array $values): self
    {
        return new self(
            metaDescription: $values["meta_description"],
            openGraphTitle:  $values["opengraph_title"],
            openGraphDescription:  $values["opengraph_description"],
            openGraphImage:  $values["opengraph_image"],
            openGraphImageWidth:  $values["opengraph_image_width"],
            openGraphImageHeight:  $values["opengraph_image_height"],
            twitterTitle:  $values["twitter_title"],
            twitterDescription:  $values["twitter_description"],
            twitterImage:  $values["twitter_image"]
        );
    }
}
