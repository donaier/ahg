<?php defined('C5_EXECUTE') or die('Access Denied.');
$app = \Concrete\Core\Support\Facade\Application::getFacadeApplication();

if (is_object($f) && $f->getFileID()) {
    if ($f->getTypeObject()->isSVG()) {
        $tag = new \HtmlObject\Image();
        $tag->src($f->getRelativePath());
         if ($maxWidth > 0) {
            $tag->width($maxWidth);
        }
        if ($maxHeight > 0) {
            $tag->height($maxHeight);
        }
        $tag->addClass('ccm-svg');
    } elseif ($maxWidth > 0 || $maxHeight > 0) {
        $im = $app->make('helper/image');
        $thumb = $im->getThumbnail($f, $maxWidth, $maxHeight, $cropImage);

        $tag = new \HtmlObject\Image();
        $tag->src($thumb->src)->width($thumb->width)->height($thumb->height);
    } else {
        $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('web');
        if ($type) {
            $src = $f->getThumbnailURL($type->getBaseVersion());
            $tag = new \HtmlObject\Image();
            $tag->src($src);
        }

    }

    $tag->addClass('ccm-image-block img-responsive bID-' . $bID);

    if ($altText) {
        $tag->alt(h($altText));
    } else {
        $tag->alt('');
    }

    if ($title) {
        $tag->title(h($title));
    }

    if ($linkURL) {
        echo '<a href="' . $linkURL . '" ' . ($openLinkInNewWindow ? 'target="_blank" rel="noopener noreferrer"' : '') . '>';
    }

    // add data attributes for hover effect
    if (is_object($foS) && !$f->getTypeObject()->isSVG() && !$foS->getTypeObject()->isSVG()) {
        $tag->addClass('ccm-image-block-hover');
        $tag->setAttribute('data-default-src', $imgPaths['default']);
        $tag->setAttribute('data-hover-src', $imgPaths['hover']);
    }

    echo $tag;

    if ($linkURL) {
        echo '</a>';
    }
} elseif ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Image Block.'); ?></div>
<?php
}
