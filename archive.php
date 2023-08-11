---
layout: default
title: "Archives"
---

<div class="well">
{%for post in site.posts %}
    {% unless post.next or post.next.hidden %}
        <h1>{{ post.date | date: '%Y' }}</h1>
        <ul>
    {% else %}
        {% capture year %}{{ post.date | date: '%Y' }}{% endcapture %}
        {% capture nyear %}{{ post.next.date | date: '%Y' }}{% endcapture %}
        {% if year != nyear %}
            </ul>
            <h1>{{ post.date | date: '%Y' }}</h1>
            <ul>
        {% endif %}
    {% endunless %}
    {% if post.hidden %}
        {% continue %}
    {% endif %}
    <li><a href="{{ site.baseurl}}{{ post.url }}">{{ post.date | date: "%b %-d" }} - {{ post.title }}</a></li>
{% endfor %}
</ul>
</div>
