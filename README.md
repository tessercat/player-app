# Index

This repo contains
files for the index site.

See the
[index-deploy](https://github.com/tessercat/index-deploy)
repo for more info.

## Player

A PHP script
to stream home movies
via HLS.

Chunk files for HLS
and place the files in `/opt/index/media/<slug>`
and add `poster.jpg` (640x426),
`thumb.jpg` (300x300)
and `playlist.m3u8`.
Chown the files to `www-data:www-data`
and navigate to `https://{{ hostname }}/player?<slug>`.

## Marquee

Add movie slugs and descriptions
to `/opt/index/media/marquee.json`
and navigate to `https://{{ hostname }}/marquee`.

```
[{
    "slug": "<slug1>",
    "description": "<description1>"
}, {
    "slug": "<slug2>",
    "description": "<description2>"
}]
```
