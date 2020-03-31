<html class="no-js"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章') ), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>
<link rel="stylesheet" href="https://cdn.staticfile.org/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/grid.css'); ?>">
<style>@media print {#ghostery-purple-box {display:none !important}}</style></head>
