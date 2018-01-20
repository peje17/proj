---
views:
    main:
        template: default/article
        data:
            class: blog

    flash:
        region: flash
        template: default/image
        data:
            src: "cimage/imgd.php?src=headerbackground02.jpg&width=1100&h=200&crop-to-fit&area=30,0,0,0"

    byline: false
    share-this: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: default/blog-list
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                items: 10

    blog-toc:
        region: sidebar-right
        template: default/blog-toc
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

...
Excecutive Consultants Blogg
============================
