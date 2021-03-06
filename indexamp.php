<!DOCTYPE html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <script async="" src="https://cdn.ampproject.org/v0.js"></script>
    <title>Interview Buddy</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="amp-script-src" content="sha384-R-h97KEnwx5gtl8ljLO4klGjLa_8zpQF20mSbUVOwQo_Yc-rSJ3LgupZK49l52kH">
    <!-- Full Page Link-->
    <link rel="canonical" href="https://ib.websitedemo.one">
    <script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <style amp-boilerplate>
    body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-moz-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-ms-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @-o-keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }

    @keyframes -amp-start {
        from {
            visibility: hidden
        }

        to {
            visibility: visible
        }
    }
    </style><noscript>
        <style amp-boilerplate>
        body {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none
        }
        </style>
    </noscript><!-- Custom Style-->
    <style amp-custom>
    @font-face {
        font-display: swap;
        font-family: GT Walsheim Pro;
        font-style: normal;
        font-weight: 400;
        src: url(assets/fonts/3579e898550a8cc59ccc.eot);
        src: local("GT Walsheim Pro Regular"), local("GTWalsheimPro-Regular"), url(assets/fonts/3579e898550a8cc59ccc.eot?#iefix) format("embedded-opentype"), url(assets/fonts/6aff6f11d3d29930c9fe.woff2) format("woff2"), url(assets/fonts/1668df1c1c97770e0490.woff) format("woff"), url(assets/fonts/1fd3cd7ade0f79b2152a.ttf) format("truetype")
    }

    @font-face {
        font-display: swap;
        font-family: GT Walsheim Pro;
        font-style: normal;
        font-weight: 500;
        src: url(assets/fonts/14369c3a451c82dc1923.eot);
        src: local("GT Walsheim Pro Medium"), local("GTWalsheimPro-Medium"), url(assets/fonts/14369c3a451c82dc1923.eot?#iefix) format("embedded-opentype"), url(assets/fonts/ad6b035f63b8e9185266.woff2) format("woff2"), url(assets/fonts/56bd75a22ae9d40f0b48.woff) format("woff"), url(assets/fonts/bc56cfc10feb515d6622.ttf) format("truetype")
    }

    @font-face {
        font-display: swap;
        font-family: GT Walsheim Pro;
        font-style: normal;
        font-weight: 700;
        src: url(assets/fonts/7b4147fb0a41836f213f.eot);
        src: local("GT Walsheim Pro Bold"), local("GTWalsheimPro-Bold"), url(assets/fonts/7b4147fb0a41836f213f.eot?#iefix) format("embedded-opentype"), url(assets/fonts/6b113f6b3bd165884e16.woff2) format("woff2"), url(assets/fonts/6ead5fc9d23b21a10d0a.woff) format("woff"), url(assets/fonts/2dbf49e9fcb548837711.ttf) format("truetype")
    }

    :root {
        --black: #0b1331;
        --white: #fff;
        --nsc: #ef3939;
        --nsbg: rgba(0, 0, 0, 0.96);
        --nsbgs: rgba(0, 0, 0, 0.9);
        --primary-default: #ffac00
    }

    [data-theme=default] {
        --primary: var(--primary-default);
        --orange-1: var(--primary);
        --orange-2: #fecb00;
        --green-1: #21a35d;
        --green-2: #01b600;
        --grey: #777e8e;
        --background: #fffbf3;
        --font-88: rgba(11, 19, 49, 0.88);
        --font-60: rgba(11, 19, 49, 0.6);
        --font-38: rgba(11, 19, 49, 0.38);
        --border: #ececec;
        --shadow: rgba(0, 0, 0, 0.06);
        --shadow-2: rgba(0, 0, 0, 0.2);
        --btn-other-bg: #ececec;
        --btn-other-bg-hover: #dfdfdf;
        --btn-other-color: #777e8e
    }

    body,
    html {
        overflow-x: clip
    }

    body {
        background-color: var(--background)
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    ::-moz-selection {
        background-color: var(--primary);
        color: #fff
    }

    ::selection {
        background-color: var(--primary);
        color: #fff
    }

    ::-moz-placeholder {
        color: rgba(11, 19, 49, .4);
        opacity: 1
    }

    ::placeholder {
        color: rgba(11, 19, 49, .4);
        opacity: 1
    }

    body {
        box-sizing: border-box
    }

    html {
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(11, 19, 49, 0);
        font-size: 50%;
        scroll-behavior: smooth
    }

    @media only screen and (min-width:48em) {
        html {
            font-size: 56.24%
        }
    }

    @media only screen and (min-width:62em) {
        html {
            font-size: 56.24%
        }
    }

    @media only screen and (min-width:75em) {
        html {
            font-size: 62.5%
        }
    }

    @media only screen and (min-width:87.5em) {
        html {
            font-size: 62.5%
        }
    }

    a {
        background-color: transparent;
        color: var(--primary);
        text-decoration: none
    }

    a:focus {
        outline: 0 none
    }

    a:not([href]),
    a:not([href]):hover {
        color: inherit;
        text-decoration: none
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: 0 0;
        border: 0;
        border-radius: 0;
        color: inherit;
        font-family: inherit;
        line-height: inherit
    }

    button:focus,
    input:focus,
    optgroup:focus,
    select:focus,
    textarea:focus {
        outline: 0 none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0 none
    }

    .section,
    .wrapper,
    .wrapper--fluid {
        position: relative;
        width: 100%
    }

    .wrapper,
    .wrapper--fluid {
        margin: 0 auto;
        padding: 0 2rem
    }

    .wrapper .track,
    .wrapper--fluid .track {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -2rem
    }

    @media only screen and (min-width:75em) {
        .wrapper {
            max-width: 104rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .wrapper {
            max-width: 130rem
        }
    }

    @media only screen and (min-width:48em) {
        .wrapper--fluid {
            max-width: 150rem
        }
    }

    @media only screen and (min-width:62em) {
        .wrapper--fluid {
            max-width: 150rem
        }
    }

    @media only screen and (min-width:75em) {
        .wrapper--fluid {
            max-width: 150rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .wrapper--fluid {
            max-width: 150rem
        }
    }

    body {
        color: var(--black);
        font-family: GT Walsheim Pro, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    a,
    address,
    article,
    b,
    blockquote,
    button,
    code,
    em,
    figcaption,
    figure,
    form,
    i,
    input,
    label,
    li,
    noscript,
    ol,
    optgroup,
    option,
    p,
    pre,
    samp,
    section,
    select,
    span,
    strong,
    table,
    td,
    textarea,
    th,
    u,
    ul,
    var {
        font-size: 1.6rem;
        font-weight: 400;
        line-height: normal
    }

    h1 {
        font-size: 3rem
    }

    h1,
    h2 {
        font-weight: 400;
        line-height: normal
    }

    h2 {
        font-size: 2.5rem
    }

    h3 {
        font-size: 2rem
    }

    h3,
    h4 {
        font-weight: 400;
        line-height: normal
    }

    h4 {
        font-size: 1.5rem
    }

    h5 {
        font-size: 1.25rem
    }

    h5,
    h6 {
        font-weight: 400;
        line-height: normal
    }

    h6 {
        font-size: 1rem
    }

    code,
    kbd,
    pre,
    samp,
    var {
        font-family: Lucida Console, Monaco, monospace, monospace
    }

    b,
    strong {
        font-weight: bolder
    }

    .navbar {
        background-color: var(--white);
        border-bottom: .1rem solid var(--border);
        box-shadow: 0 .4rem .4rem 0 var(--shadow);
        padding: 1.8rem 0;
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 999
    }

    .navbar__wrapper {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 0 auto;
        padding: 0 2rem;
        width: 100%
    }

    @media only screen and (min-width:75em) {
        .navbar__wrapper {
            flex-wrap: nowrap;
            max-width: 104rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .navbar__wrapper {
            flex-wrap: nowrap;
            max-width: 130rem
        }
    }

    .navbar__wrapper--logo {
        align-items: center;
        display: inline-flex
    }

    .navbar__wrapper--logo-img {
        max-height: 4.3rem
    }

    .navbar__wrapper--toggle {
        fill: var(--black);
        display: block;
        height: 2.8rem
    }

    @media only screen and (min-width:75em) {
        .navbar__wrapper--toggle {
            display: none
        }
    }

    @media only screen and (min-width:87.5em) {
        .navbar__wrapper--toggle {
            display: none
        }
    }

    .navbar__wrapper--menu {
        align-items: center;
        display: block;
        justify-content: space-between;
        margin-left: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height .3s ease-in-out;
        width: 100%
    }

    @media only screen and (min-width:75em) {
        .navbar__wrapper--menu {
            display: flex;
            flex: 1 1 100%;
            margin-left: 5rem;
            max-height: 15rem;
            overflow: visible
        }
    }

    @media only screen and (min-width:87.5em) {
        .navbar__wrapper--menu {
            display: flex;
            flex: 1 1 100%;
            margin-left: 5rem;
            max-height: 15rem;
            overflow: visible
        }
    }

    .navigation {
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        margin-top: 2rem
    }

    @media only screen and (min-width:75em) {
        .navigation {
            align-items: center;
            flex-direction: row;
            margin-top: 0
        }
    }

    @media only screen and (min-width:87.5em) {
        .navigation {
            align-items: center;
            flex-direction: row;
            margin-top: 0
        }
    }

    .navigation--li {
        display: inline-block;
        margin: .6rem 0;
        position: relative
    }

    @media only screen and (min-width:75em) {
        .navigation--li {
            margin: 0 1.65rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .navigation--li {
            margin: 0 1.65rem
        }
    }

    .navigation--li:first-of-type {
        margin-left: 0
    }

    .navigation--li:last-of-type {
        margin-right: 0
    }

    .navigation--li-a {
        color: var(--black);
        display: flex;
        transition: color .2s ease-in
    }

    .navigation--li-a:hover {
        color: var(--primary)
    }

    .navbuttons {
        align-items: center;
        display: flex;
        justify-content: flex-end
    }

    .navbuttons--li {
        display: inline-block;
        margin: 0 1rem
    }

    .navbuttons--li:first-of-type {
        margin-left: 0
    }

    .navbuttons--li:last-of-type {
        margin-right: 0
    }

    .navbuttons--li-a {
        align-items: center;
        color: var(--black);
        display: flex;
        transition: color .2s ease-in
    }

    .navbuttons--li-a:hover {
        color: var(--primary)
    }

    .togglenav {
        max-height: 50rem
    }

    .footer {
        background-color: var(--black)
    }

    .footer__nav {
        align-items: flex-start;
        display: flex;
        flex-wrap: wrap;
        gap: 4rem;
        justify-content: space-between;
        padding: 8rem 0
    }

    @media only screen and (min-width:62em) {
        .footer__nav {
            flex-wrap: nowrap
        }
    }

    @media only screen and (min-width:75em) {
        .footer__nav {
            flex-wrap: nowrap
        }
    }

    @media only screen and (min-width:87.5em) {
        .footer__nav {
            flex-wrap: nowrap
        }
    }

    .footer__nav .nav__about {
        flex: 1 1 100%
    }

    @media only screen and (min-width:62em) {
        .footer__nav .nav__about {
            flex: 1 1 20%
        }
    }

    @media only screen and (min-width:75em) {
        .footer__nav .nav__about {
            flex: 1 1 20%
        }
    }

    @media only screen and (min-width:87.5em) {
        .footer__nav .nav__about {
            flex: 1 1 20%
        }
    }

    .footer__nav .nav__about--logo {
        max-height: 6.5rem
    }

    .footer__nav .nav__about--desc {
        font-size: 1.5rem;
        line-height: 1.4;
        margin: 2.5rem 0 4.5rem
    }

    .footer__nav .nav__about .social {
        align-items: center;
        display: flex
    }

    .footer__nav .nav__about .social--li {
        display: inline-block;
        margin: 0 1.2rem
    }

    .footer__nav .nav__about .social--li:first-of-type {
        margin-left: 0
    }

    .footer__nav .nav__about .social--li:last-of-type {
        margin-right: 0
    }

    .footer__nav .nav__about .social--a {
        color: var(--white);
        font-size: 2.5rem;
        transition: all .2s ease-in
    }

    .footer__nav .nav__about .social--a:hover {
        color: var(--orange-2)
    }

    .footer__nav .nav__links {
        flex: 1 1 100%
    }

    @media only screen and (min-width:48em) {
        .footer__nav .nav__links {
            flex: 0 1 auto
        }
    }

    @media only screen and (min-width:62em) {
        .footer__nav .nav__links {
            flex: 0 1 auto
        }
    }

    @media only screen and (min-width:75em) {
        .footer__nav .nav__links {
            flex: 0 1 auto
        }
    }

    @media only screen and (min-width:87.5em) {
        .footer__nav .nav__links {
            flex: 0 1 auto
        }
    }

    .footer__nav .nav__links--head {
        color: var(--white);
        font-size: 2.2rem;
        font-weight: 700
    }

    .footer__nav .nav__links .fnav {
        display: flex;
        flex-direction: column;
        margin-top: 2rem
    }

    .footer__nav .nav__links .fnav--li {
        display: block;
        margin: .5rem 0
    }

    .footer__nav .nav__links .fnav--li:first-of-type {
        margin-top: 0
    }

    .footer__nav .nav__links .fnav--li:last-of-type {
        margin-bottom: 0
    }

    .footer__nav .nav__links .fnav--a {
        color: var(--white);
        font-size: 1.4rem;
        transition: all .2s ease-in
    }

    .footer__nav .nav__links .fnav--a:hover {
        color: var(--orange-2)
    }

    .footer__nav .nav__links .cbox {
        display: flex;
        flex-direction: column;
        margin: 2rem 0
    }

    .footer__nav .nav__links .cbox--head {
        color: var(--white);
        font-size: 1.6rem;
        font-weight: 500;
        margin-bottom: 1rem
    }

    .footer__nav .nav__links .cbox--label,
    .footer__nav .nav__links .cbox--val {
        color: var(--white);
        font-size: 1.4rem;
        transition: all .2s ease-in
    }

    .footer__nav .nav__links .cbox--val:hover {
        color: var(--orange-1)
    }

    .footer__nav .nav__subsc {
        align-items: center;
        background-color: var(--white);
        border-radius: 1.6rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        display: flex;
        flex: 1 1 100%;
        flex-direction: column;
        justify-content: center;
        padding: 3rem
    }

    @media only screen and (min-width:62em) {
        .footer__nav .nav__subsc {
            flex: 1 1 25%
        }
    }

    @media only screen and (min-width:75em) {
        .footer__nav .nav__subsc {
            flex: 1 1 25%
        }
    }

    @media only screen and (min-width:87.5em) {
        .footer__nav .nav__subsc {
            flex: 1 1 25%
        }
    }

    .footer__nav .nav__subsc--h4,
    .footer__nav .nav__subsc--p {
        text-align: center
    }

    .footer__nav .nav__subsc--h4 {
        font-size: 1.8rem;
        font-weight: 500
    }

    .footer__nav .nav__subsc--p {
        color: var(--font-60);
        margin-top: 2rem
    }

    .copyright {
        background-color: #363e4b;
        padding: 2rem 0
    }

    .copyright .copy {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        justify-content: space-between
    }

    @media only screen and (min-width:48em) {
        .copyright .copy {
            align-items: center;
            flex-direction: row;
            gap: 0
        }
    }

    @media only screen and (min-width:62em) {
        .copyright .copy {
            align-items: center;
            flex-direction: row;
            gap: 0
        }
    }

    @media only screen and (min-width:75em) {
        .copyright .copy {
            align-items: center;
            flex-direction: row;
            gap: 0
        }
    }

    @media only screen and (min-width:87.5em) {
        .copyright .copy {
            align-items: center;
            flex-direction: row;
            gap: 0
        }
    }

    .copyright .copy--p {
        color: #c4c4c4;
        font-size: 1.3rem
    }

    .copyright .copy .copyul {
        align-items: center;
        display: flex
    }

    .copyright .copy .copyul--li {
        display: inline-block;
        margin: 0 1.5rem
    }

    .copyright .copy .copyul--li:first-of-type {
        margin-left: 0
    }

    .copyright .copy .copyul--li:last-of-type {
        margin-right: 0
    }

    .copyright .copy .copyul--a {
        color: #c4c4c4;
        font-size: 1.3rem;
        transition: all .2s ease-in
    }

    .copyright .copy .copyul--a:hover {
        color: var(--orange-2)
    }

    .crafted {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABrAAAABNBAMAAAAcIDnpAAAAG1BMVEUAAAD////////////////////////////////rTT7CAAAACXRSTlMAGRYSDAcDLiLehpjsAAAD2UlEQVR42uzdwVLaUBTG8VOTsO6BardGR9fGqNMlaDrjUqo4XSK1vgKuuymPXQIIEaYFw0VObv+/BQ8A+SbnnnvuRfB34WnjXAA4FcaqeiwAXGpp7kYAuBOqKq8swLGejjQEgDttVWpBwLVEx5oCwJmYYAHu6cSJAOCNBViW0LyAKZ48iS0d6wpgQLArXujpyCcBDIjiPfFCxOQFDLnUj+KHtg7VqQRhQaC6LyU9Zl/FkFpMTxBGRPEaGz9tYwua6OqMXMGES/UoWIARgQ41CRbgwmWa3Y8LQYIFON3yqadZ51JzNwQLcCHUCYIFONTSAimj1ul0rge/hp+eTEQB6+tpQek5h9/9Z3aOgLm91IkGwcIqwtP0XvBvLYKFtwk57Pa29sUngoUVJNyB9bZasEHzAssFnp7PDg4OxKUe7XaUuF3Ok8N7M4HqpmrBY4KFpeLt3Yd6l551ZcZ2sArtiwbBwjKRTsi7u1XVRiFZxoPV06kmwcKqwerKOwvjubLKeLAindolWFgi0m1dgvWgmzwZXgxWmGVuF1n1LsGC1WDFG72HtRisHa27DZaeeHE0HxtU29YaK9INtiPTNP3S7w8/L9wFK9AcV4aZk/+8BiVb6goGm3xGY9XP/b6q7rn75nc0x+2x5hgN1rb2sYLXvWv7wfqgI1zGZ43RYG1r8mKnasF60NxhzN8gGmM0WLXVZwX/72C1dbzv9vPuKvFwBKy6jAZr1O2qN6Wcx6s0u7G3xip0BTudzvfBwMHsa7vwYo/uWGSZYTVY8pgelsxVdKpD9fOyeV5c3LkPlk5fXg5Gmo4E5pgNVmlRomNHa5zD2Jcp88FqcM+5NaONlefRxoo3aom+uCjfjuzKlO1gsbCyaPrzevIXMLlv6834hPOVoPlgUQja42GwQi04KhnM+o3MbCRYWZZdDwbDz6asJ6YQNMjDYLVV1xxLvT04XMiV2VnBGoWgRf4Fqxar7VGEpye3waIQNMqzruCOvjA/iuDZN4+FJ1E8MqsEzd9GQ7C85lmwYn1tX8wiWF7zK1iR5qpxRMmvbx5e/7yBamUWWfnRfHjLr2A96Dx2ebAagrX0lj0O1WLrak9P4o9EtTptQaAqFoN1IgDW77ZXp98OVAXBAkQIFlAFMWssYIjmBWBfi3Y74F6bDWLAvZ6+xgA54EBYoel2oDIiLfLpzgFgmxJ6F4B7PU6NAO6FLLGADUioBAH3flTkYD7+bBQMKcBmOFphjYJRQH3AMtrDGgWjgAYgCd4QHF3ONApGAfVA8Gi+GgWjgAYgxQi4SNBkdAprFIwCKgO2QX70FACo6LYLmGfBEAAAAABJRU5ErkJggg==);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 2rem 0
    }

    .crafted .craft {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .crafted .craft--p {
        color: #777e8e;
        font-size: 1.3rem;
        text-transform: uppercase
    }

    .heading--display,
    .heading--h1,
    .heading--h2,
    .heading--h3,
    .heading--h4,
    .heading--h5 {
        font-weight: 700;
        line-height: 1
    }

    .heading--display {
        font-size: 5rem
    }

    @media only screen and (min-width:62em) {
        .heading--display {
            font-size: 5.4rem
        }
    }

    @media only screen and (min-width:75em) {
        .heading--display {
            font-size: 6.4rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .heading--display {
            font-size: 6.4rem
        }
    }

    .heading--h1 {
        font-size: 4rem
    }

    @media only screen and (min-width:62em) {
        .heading--h1 {
            font-size: 4.4rem
        }
    }

    @media only screen and (min-width:75em) {
        .heading--h1 {
            font-size: 5.6rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .heading--h1 {
            font-size: 5.6rem
        }
    }

    .heading--h2 {
        font-size: 3.5rem
    }

    @media only screen and (min-width:62em) {
        .heading--h2 {
            font-size: 4.2rem
        }
    }

    @media only screen and (min-width:75em) {
        .heading--h2 {
            font-size: 4.8rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .heading--h2 {
            font-size: 4.8rem
        }
    }

    .heading--h3 {
        font-size: 2.9rem
    }

    @media only screen and (min-width:62em) {
        .heading--h3 {
            font-size: 3.2rem
        }
    }

    @media only screen and (min-width:75em) {
        .heading--h3 {
            font-size: 3.6rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .heading--h3 {
            font-size: 3.6rem
        }
    }

    .heading--h4 {
        font-size: 2.4rem
    }

    .heading--h5 {
        font-size: 1.8rem
    }

    .heading--h6 {
        font-size: 1.6rem
    }

    .base--18,
    .base--20 {
        line-height: 1.4
    }

    .base--18 {
        font-size: 1.8rem
    }

    .base--20 {
        font-size: 2rem
    }

    .weight--900 {
        font-weight: 900
    }

    .weight--700 {
        font-weight: 700
    }

    .weight--500 {
        font-weight: 500
    }

    .weight--400 {
        font-weight: 400
    }

    .weight--300 {
        font-weight: 300
    }

    .color--primary {
        color: var(--primary)
    }

    .color--secondary {
        color: var(--secondary)
    }

    .color--white {
        color: var(--white)
    }

    .lineheight--12 {
        line-height: 1.2
    }

    .lineheight--13 {
        line-height: 1.3
    }

    .lineheight--14 {
        line-height: 1.4
    }

    .btn--other,
    .btn--primary,
    .btn--secondary,
    .ticked__ul--li-img {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .btn--other,
    .btn--primary,
    .btn--secondary {
        align-items: center;
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        overflow: hidden;
        position: relative;
        text-align: center;
        z-index: 1
    }

    .btn--primary {
        background-size: .1rem 5rem;
        background: var(--orange-1);
        color: var(--white);
        font-size: 1.4rem;
        font-weight: 700;
        padding: 1.4rem 2.8rem;
        transition: opacity .2s ease-in
    }

    .btn--primary span {
        color: inherit;
        font-size: inherit;
        font-weight: inherit
    }

    .btn--primary svg {
        height: 1.8rem;
        margin-left: 1.6rem
    }

    .btn--primary:active,
    .btn--primary:focus,
    .btn--primary:hover {
        color: var(--white)
    }

    .btn--primary:active:before,
    .btn--primary:focus:before,
    .btn--primary:hover:before {
        opacity: 1
    }

    .btn--primary:disabled {
        cursor: not-allowed
    }

    .btn--secondary {
        background-size: .1rem 5rem;
        background: var(--green-1);
        color: var(--white);
        font-size: 1.4rem;
        font-weight: 700;
        padding: 1.4rem 2.8rem;
        transition: opacity .2s ease-in
    }

    .btn--secondary span {
        color: inherit;
        font-size: inherit;
        font-weight: inherit
    }

    .btn--secondary svg {
        height: 1.8rem;
        margin-left: 1.6rem
    }

    .btn--secondary:active,
    .btn--secondary:focus,
    .btn--secondary:hover {
        color: var(--white)
    }

    .btn--secondary:active:before,
    .btn--secondary:focus:before,
    .btn--secondary:hover:before {
        opacity: 1
    }

    .btn--secondary:disabled {
        cursor: not-allowed
    }

    .btn--other {
        background: var(--btn-other-bg);
        color: var(--btn-other-color);
        font-size: 1.4rem;
        font-weight: 700;
        padding: 1.4rem 2.8rem;
        transition: opacity .2s ease-in
    }

    .btn--other span {
        color: inherit;
        font-size: inherit;
        font-weight: inherit
    }

    .btn--other svg {
        height: 1.8rem;
        margin-left: 1.6rem
    }

    .btn--other:active,
    .btn--other:focus,
    .btn--other:hover {
        box-shadow: 0 .2rem 2rem rgba(0, 0, 0, .1);
        color: var(--white)
    }

    .btn--other:active:before,
    .btn--other:focus:before,
    .btn--other:hover:before {
        opacity: 1
    }

    .btn--other:disabled {
        cursor: not-allowed
    }

    .btn--grad-orange {
        background: var(--orange-1);
        background: linear-gradient(180deg, var(--orange-1) 0, var(--orange-2) 100%)
    }

    .btn--grad-orange:before {
        background: linear-gradient(0deg, var(--orange-1) 0, var(--orange-2) 100%);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-orange-rev {
        background: var(--orange-1);
        background: linear-gradient(0deg, var(--orange-1) 0, var(--orange-2) 100%)
    }

    .btn--grad-orange-rev:before {
        background: linear-gradient(180deg, var(--orange-1) 0, var(--orange-2) 100%);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-green {
        background: var(--green-1);
        background: linear-gradient(180deg, var(--green-1) 0, var(--green-2) 100%)
    }

    .btn--grad-green:before {
        background: linear-gradient(0deg, var(--green-1) 0, var(--green-2) 100%);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-green-rev {
        background: var(--green-1);
        background: linear-gradient(0deg, var(--green-1) 0, var(--green-2) 100%)
    }

    .btn--grad-green-rev:before {
        background: linear-gradient(180deg, var(--green-1) 0, var(--green-2) 100%);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-orange-v {
        background: var(--orange-1);
        background: linear-gradient(272deg, #ffb213, #ffd172 35%, #ffac01);
        box-shadow: 0 .4rem 1rem rgba(0, 0, 0, .1);
        padding: 1.4rem 1.4rem 1.4rem 1.8rem
    }

    .btn--grad-orange-v:before {
        background: linear-gradient(-272deg, #ffb213, #ffd172 35%, #ffac01);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-green-v {
        background: var(--green-1);
        background: linear-gradient(100deg, #21a35d 35%, #01b600);
        box-shadow: 0 .4rem 1rem rgba(0, 0, 0, .1);
        padding: 1.4rem 1.4rem 1.4rem 1.8rem
    }

    .btn--grad-green-v:before {
        background: linear-gradient(-100deg, #21a35d 35%, #01b600);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .btn--grad-other {
        background: var(--btn-other-bg)
    }

    .btn--grad-other:before {
        background: linear-gradient(100deg, #21a35d 35%, #01b600);
        content: "";
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: opacity .2s ease-in;
        width: 100%;
        z-index: -1
    }

    .br--sm {
        border-radius: .8rem
    }

    .br--md {
        border-radius: 1.6rem
    }

    .br--lg {
        border-radius: 3.2rem
    }

    .br--xl {
        border-radius: 8rem
    }

    .btn--full {
        width: 100%
    }

    .min--width {
        min-width: 15rem
    }

    .btn--small {
        font-size: inherit;
        font-weight: inherit;
        padding: .5rem 1.2rem
    }

    .pricings {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(20rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .pricings {
            grid-template-columns: repeat(2, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .pricings {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .pricings {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .pricings {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    .pricing {
        align-items: center;
        background-color: var(--white);
        border-radius: 1.6rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow-2);
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        overflow: hidden;
        padding: 5rem 2.5rem 2.5rem;
        position: relative;
        z-index: 1
    }

    .pricing--label {
        background: var(--green-1);
        background: linear-gradient(180deg, var(--green-1) 0, var(--green-2) 100%);
        color: var(--white);
        left: -5rem;
        line-height: 1;
        padding: .8rem 5rem;
        pointer-events: none;
        position: absolute;
        top: 3rem;
        transform: rotate(-45deg)
    }

    .pricing--img,
    .pricing--label {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .pricing--img {
        display: inline-block;
        height: 12rem
    }

    .pricing--duration,
    .pricing--exp {
        color: var(--font-60);
        display: block;
        margin-top: .8rem;
        text-align: center
    }

    .pricing--price {
        display: block;
        margin: 2rem 0
    }

    .pricing--btn {
        width: 100%
    }

    .pricing__pm {
        align-items: center;
        border: .1rem solid var(--border);
        border-radius: 5rem;
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
        padding: .6rem;
        width: 100%
    }

    .pricing__pm--control {
        background-color: #dfdfdf;
        border-radius: 100%;
        cursor: pointer;
        min-height: 4rem;
        min-width: 4rem;
        position: relative;
        transition: all .2s ease-out
    }

    .pricing__pm--control-i {
        display: flex;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: stroke .2s ease-in;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .pricing__pm--control-i svg {
        stroke: #777e8e
    }

    .pricing__pm--control:hover {
        background: var(--green-1);
        background: linear-gradient(100deg, var(--green-1) 35%, var(--green-2) 100%)
    }

    .pricing__pm--control:hover .pricing__pm--control-i svg {
        stroke: var(--white)
    }

    .pricing__pm--qty-input {
        margin: 0 .5rem;
        padding: .9rem;
        text-align: center;
        width: 100%
    }

    .interviews {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(30rem, 1fr);
        margin-top: 3rem
    }

    @media only screen and (min-width:48em) {
        .interviews {
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .interviews {
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .interviews {
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .interviews {
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    .interviews .interview {
        border-radius: 1.6rem;
        overflow: hidden;
        padding: 3rem;
        position: relative
    }

    .interviews .interview--p {
        color: var(--font-60);
        margin: 1rem 0 2.5rem
    }

    .interviews .interview--img {
        bottom: 2rem;
        max-height: 8rem;
        pointer-events: none;
        position: absolute;
        right: 2rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 0
    }

    .interviews .interview--special {
        border: .3rem solid var(--orange-1)
    }

    .interviews .interview--special .heading--h4 {
        color: var(--orange-1)
    }

    .interviews .interview--async {
        border: .3rem solid var(--green-1)
    }

    .interviews .interview--async .heading--h4 {
        color: var(--green-1)
    }

    .subform {
        margin-top: 2rem;
        width: 100%
    }

    .subform .form--input {
        background-color: #fcfcfc;
        border: .2rem solid #dfdfdf;
        border-radius: 3rem;
        padding: 1.2rem 2rem;
        width: 100%
    }

    .subform .form--input::-moz-placeholder {
        color: var(--font-38)
    }

    .subform .form--input::placeholder {
        color: var(--font-38)
    }

    .subform--input {
        text-align: center
    }

    .subform--btn {
        margin-top: 1rem
    }

    .members {
        min-height: 36rem;
        overflow: hidden;
        perspective: 50rem;
        position: relative
    }

    @media only screen and (min-width:48em) {
        .members {
            overflow: visible
        }
    }

    @media only screen and (min-width:62em) {
        .members {
            overflow: visible
        }
    }

    @media only screen and (min-width:75em) {
        .members {
            overflow: visible
        }
    }

    @media only screen and (min-width:87.5em) {
        .members {
            overflow: visible
        }
    }

    .members__btns {
        height: 0;
        width: 0
    }

    .members__btns button {
        background-color: #ececec;
        border-radius: 100%;
        cursor: pointer;
        height: 4rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 4rem;
        z-index: 10
    }

    .members__btns button svg {
        stroke: var(--white);
        left: 50%;
        max-height: 4rem;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .members__btns button:hover {
        background: linear-gradient(180deg, var(--orange-2) 0, var(--orange-1) 100%)
    }

    .members__btns .member__arrow--prev {
        left: 2rem
    }

    .members__btns .member__arrow--next {
        right: 2rem;
        transform: translateY(-50%) rotate(180deg)
    }

    .members__cards {
        height: 100%;
        left: 0;
        top: 0;
        width: 100%
    }

    .members .member,
    .members__cards {
        align-items: center;
        display: flex;
        justify-content: center;
        position: absolute
    }

    .members .member {
        background-color: var(--white);
        border-radius: 1.6rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        min-height: 35rem;
        padding: 2.5rem;
        transition: all .3s ease-in;
        width: 30rem
    }

    .members .member--data {
        align-items: center;
        display: flex;
        flex-direction: column;
        pointer-events: none
    }

    .members .member--data,
    .members .member--img {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .members .member--img {
        display: inline-block;
        height: 10rem
    }

    .members .member--name {
        font-size: 2.6rem;
        font-weight: 700;
        margin: 2rem 0
    }

    .members .member--pos {
        color: var(--font-60);
        display: block;
        font-size: 1.8rem;
        font-weight: 400;
        text-align: center
    }

    .members .member[data-pos="0"] {
        transform: scale(.95);
        z-index: 5
    }

    .members .member[data-pos="-1"] {
        transform: translateX(-65%) scale(.7);
        z-index: 4
    }

    .members .member[data-pos="1"] {
        transform: translateX(65%) scale(.7);
        z-index: 4
    }

    .members .member[data-pos="-2"] {
        transform: translateX(-100%) scale(.5);
        z-index: 3
    }

    .members .member[data-pos="2"] {
        transform: translateX(100%) scale(.5);
        z-index: 3
    }

    .radar {
        background: var(--white);
        border: .1rem solid var(--border);
        border-radius: 4rem;
        bottom: 2rem;
        box-shadow: 0 .8rem 1rem 0 var(--shadow-2);
        padding: 3rem 2rem;
        position: fixed;
        right: 2rem;
        z-index: 99
    }

    .radar,
    .radar--link {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .radar--img {
        display: block;
        max-height: 18rem;
        max-width: 100%
    }

    .radar__close {
        background: var(--orange-1);
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%);
        clip-path: polygon(0 0, 100% 0, 100% 100%);
        cursor: default;
        height: 5rem;
        position: absolute;
        right: -.1rem;
        top: -.1rem;
        width: 5rem;
        z-index: 2
    }

    .radar__close--x {
        color: var(--white);
        font-size: 1.4rem;
        position: absolute;
        right: 1rem;
        top: 1rem
    }

    .sectionmask {
        background-color: var(--black);
        height: 100%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%) skewY(-5deg);
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .sectionmask {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask {
            background-color: var(--background)
        }
    }

    .sectionmask .triangle {
        background: var(--orange-1);
        background: linear-gradient(180deg, var(--orange-2) 0, var(--orange-1) 100%);
        bottom: 0;
        -webkit-clip-path: polygon(0 0, 0 100%, 100% 100%);
        clip-path: polygon(0 0, 0 100%, 100% 100%);
        display: none;
        height: 85%;
        left: 0;
        overflow: hidden;
        position: absolute;
        width: 45%
    }

    @media only screen and (min-width:48em) {
        .sectionmask .triangle {
            display: block
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask .triangle {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask .triangle {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask .triangle {
            display: block
        }
    }

    .sectionmask .triangle:after {
        border-left: .4rem dashed rgba(255, 255, 255, .8);
        content: "";
        height: 150%;
        left: 0;
        position: absolute;
        top: 65px;
        transform-origin: left top;
        width: 0
    }

    @media only screen and (min-width:48em) {
        .sectionmask .triangle:after {
            transform: rotate(-37deg)
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask .triangle:after {
            transform: rotate(-44deg)
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask .triangle:after {
            transform: rotate(-48.2deg)
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask .triangle:after {
            transform: rotate(-48.2deg)
        }
    }

    .sectionmask .triangle:nth-child(2) {
        background: var(--black);
        -webkit-clip-path: polygon(100% 0, 100% 100%, 50% 100%, 0 5%, 0 0);
        clip-path: polygon(100% 0, 100% 100%, 50% 100%, 0 5%, 0 0);
        display: none;
        height: 100%;
        overflow: hidden;
        width: 100%;
        z-index: -1
    }

    @media only screen and (min-width:48em) {
        .sectionmask .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask .triangle:nth-child(2) {
            display: block
        }
    }

    .sectionmask .triangle:nth-child(2):after {
        content: "";
        display: none
    }

    .sectionmask2 {
        background-color: var(--orange-1);
        height: 100%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%) skewY(5deg);
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .sectionmask2 {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask2 {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask2 {
            background-color: var(--background)
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask2 {
            background-color: var(--background)
        }
    }

    .sectionmask2 .triangle {
        background: var(--black);
        bottom: 0;
        -webkit-clip-path: polygon(100% 0, 0 100%, 100% 100%);
        clip-path: polygon(100% 0, 0 100%, 100% 100%);
        display: none;
        height: 85%;
        overflow: hidden;
        position: absolute;
        right: 0;
        width: 45%
    }

    @media only screen and (min-width:48em) {
        .sectionmask2 .triangle {
            display: block
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask2 .triangle {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask2 .triangle {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask2 .triangle {
            display: block
        }
    }

    .sectionmask2 .triangle:after {
        border-left: .4rem dashed rgba(255, 255, 255, .8);
        content: "";
        height: 150%;
        position: absolute;
        right: 0;
        top: 65px;
        transform-origin: top right;
        width: 0
    }

    @media only screen and (min-width:48em) {
        .sectionmask2 .triangle:after {
            transform: rotate(37deg)
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask2 .triangle:after {
            transform: rotate(40deg)
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask2 .triangle:after {
            transform: rotate(44.2deg)
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask2 .triangle:after {
            transform: rotate(44.2deg)
        }
    }

    .sectionmask2 .triangle:nth-child(2) {
        background: var(--orange-1);
        background: linear-gradient(180deg, var(--orange-2) 0, var(--orange-1) 100%);
        -webkit-clip-path: polygon(100% 0, 100% 5%, 50% 100%, 0 100%, 0 0);
        clip-path: polygon(100% 0, 100% 5%, 50% 100%, 0 100%, 0 0);
        display: none;
        height: 100%;
        overflow: hidden;
        width: 100%;
        z-index: -1
    }

    @media only screen and (min-width:48em) {
        .sectionmask2 .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:62em) {
        .sectionmask2 .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .sectionmask2 .triangle:nth-child(2) {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .sectionmask2 .triangle:nth-child(2) {
            display: block
        }
    }

    .sectionmask2 .triangle:nth-child(2):after {
        content: "";
        display: none
    }

    .sectionmask3 {
        background-color: #f3f3f3;
        height: 100%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%) skewY(-5deg);
        width: 100%
    }

    .bggradwhite--tb {
        background: #fff;
        background: linear-gradient(180deg, #fff, #fff 70%, hsla(0, 0%, 100%, 0))
    }

    .bggradwhite--tbm {
        background: #fff;
        background: linear-gradient(0deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, 0) 50%, #fff)
    }

    .bggradwhite--bt {
        background: #fff;
        background: linear-gradient(0deg, #fff, #fff 70%, hsla(0, 0%, 100%, 0))
    }

    .bggradwhite--mm {
        background: #fff;
        background: linear-gradient(0deg, hsla(0, 0%, 100%, 0), #fff 5%, #fff 95%, hsla(0, 0%, 100%, 0))
    }

    .label--primary {
        background: var(--orange-1);
        border-radius: 0 8rem 8rem;
        color: var(--white);
        display: inline-block;
        font-size: 1.4rem;
        font-weight: 700;
        padding: 1.4rem 2.8rem
    }

    .heading--box {
        display: block;
        margin-bottom: 4rem
    }

    .label--heading {
        border-radius: 0 8rem 8rem;
        color: var(--white);
        display: inline-block;
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 2rem;
        padding: .8rem 2rem
    }

    @media only screen and (min-width:48em) {
        .label--heading {
            font-size: 3.4rem;
            padding: 1.2rem 4rem
        }
    }

    @media only screen and (min-width:62em) {
        .label--heading {
            font-size: 3.4rem;
            padding: 1.2rem 4rem
        }
    }

    @media only screen and (min-width:75em) {
        .label--heading {
            font-size: 3.4rem;
            padding: 1.2rem 4rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .label--heading {
            font-size: 3.4rem;
            padding: 1.2rem 4rem
        }
    }

    .label--heading {
        background: var(--orange-1)
    }

    .normal--heading {
        color: var(--black);
        display: inline-block;
        font-size: 3.4rem;
        font-weight: 700;
        margin-bottom: 2rem
    }

    .heading--para {
        color: var(--font-60);
        margin: 0 auto;
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .heading--para {
            max-width: 40%
        }
    }

    @media only screen and (min-width:75em) {
        .heading--para {
            max-width: 40%
        }
    }

    @media only screen and (min-width:62em) {
        .heading--para {
            max-width: 40%
        }
    }

    @media only screen and (min-width:87.5em) {
        .heading--para {
            max-width: 40%
        }
    }

    .heading--para-white {
        color: #e2e2e2
    }

    .video,
    .video--box {
        position: relative;
        width: 100%
    }

    .video--box {
        background-color: var(--grey);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 102%;
        border-radius: 1.6rem;
        cursor: pointer;
        margin: 3rem 0;
        padding-top: 50%;
        z-index: 1
    }

    .video--box .playbtn {
        align-items: center;
        background-color: var(--primary);
        cursor: pointer;
        display: flex;
        height: 5rem;
        justify-content: center;
        padding: 2rem;
        transition: all .2s ease-in;
        width: 5rem;
        z-index: 2
    }

    .video--box .playbtn,
    .video--box .playbtn:after {
        border-radius: 50%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .video--box .playbtn:after {
        border: .2rem solid rgba(255, 255, 255, .5);
        content: "";
        height: 7rem;
        width: 7rem
    }

    .video--box .playbtn--arrow {
        background-color: var(--white);
        -webkit-clip-path: polygon(100% 50%, 0 0, 0 100%);
        clip-path: polygon(100% 50%, 0 0, 0 100%);
        height: 2rem;
        margin-right: -.6rem;
        width: 2rem
    }

    .video--box:hover .playbtn {
        transform: translate(-50%, -50%) scale(1.2)
    }

    .video--geometry {
        left: 50%;
        max-width: 100%;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 0
    }

    .textcenter {
        text-align: center
    }

    .header {
        padding: 3rem 0
    }

    .header__content {
        align-items: center;
        display: grid;
        gap: 2rem;
        grid-template-columns: minmax(28rem, 1fr);
        padding: 0
    }

    @media only screen and (min-width:48em) {
        .header__content {
            align-items: center;
            gap: 4rem;
            grid-template-columns: repeat(2, minmax(28rem, 1fr));
            padding: 0
        }
    }

    @media only screen and (min-width:62em) {
        .header__content {
            align-items: center;
            gap: 12rem;
            grid-template-columns: repeat(2, minmax(28rem, 1fr));
            padding: 0 6rem
        }
    }

    @media only screen and (min-width:75em) {
        .header__content {
            align-items: center;
            gap: 12rem;
            grid-template-columns: repeat(2, minmax(28rem, 1fr));
            padding: 0 6rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .header__content {
            align-items: center;
            gap: 12rem;
            grid-template-columns: repeat(2, minmax(28rem, 1fr));
            padding: 0 6rem
        }
    }

    .header__content .info--h1 {
        margin-top: 2rem
    }

    .header__content .info--p {
        color: var(--font-60);
        margin: 2rem 0
    }

    .header__content .info--btns a {
        margin-right: 1rem
    }

    .header__content .info--btns a:last-of-type {
        margin-right: 0
    }

    .header__content .video {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-self: flex-end;
        margin: 0;
        overflow: hidden;
        padding: 2rem 0;
        position: relative;
        width: 100%
    }

    @media only screen and (min-width:62em) {
        .header__content .video {
            margin-right: 6rem;
            overflow: visible;
            padding: 0;
            width: 40rem
        }
    }

    @media only screen and (min-width:75em) {
        .header__content .video {
            margin-right: 6rem;
            overflow: visible;
            padding: 0;
            width: 40rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .header__content .video {
            margin-right: 6rem;
            overflow: visible;
            padding: 0;
            width: 40rem
        }
    }

    .header__content .video--achive {
        align-items: center;
        background-color: var(--white);
        border-radius: 2rem;
        box-shadow: 0 .4rem 1rem var(--shadow-2);
        display: inline-flex;
        justify-content: center;
        min-width: 25rem;
        padding: 2rem;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 1
    }

    .header__content .video--achive-img {
        max-height: 5.4rem
    }

    @-webkit-keyframes slide {
        0% {
            transform: perspective(50rem) translateZ(0)
        }

        to {
            transform: perspective(50rem) translate3d(-2160px, 0, 0)
        }
    }

    @keyframes slide {
        0% {
            transform: perspective(50rem) translateZ(0)
        }

        to {
            transform: perspective(50rem) translate3d(-2160px, 0, 0)
        }
    }

    .testimonials--section .testimonials {
        align-items: center;
        -webkit-animation: slide 70s linear infinite;
        animation: slide 70s linear infinite;
        display: flex;
        justify-content: flex-start;
        overflow: hidden;
        transform-style: preserve-3d;
        width: 432rem;
        will-change: transform
    }

    .testimonials--section .testimonial__cards {
        align-items: flex-start;
        display: flex;
        overflow: hidden;
        width: 100%
    }

    .testimonials--section .testimonial {
        background-color: var(--white);
        border: .2rem solid var(--border);
        border-radius: 1.6rem;
        display: flex;
        flex: 0 0 41.2rem;
        flex-direction: column;
        margin: 0 1rem;
        padding: 3rem;
        position: relative
    }

    .testimonials--section .testimonial--quotesign {
        max-height: 2.6rem;
        position: absolute;
        right: 3.5rem;
        top: 5rem
    }

    .testimonials--section .testimonial__person {
        align-items: center;
        display: flex
    }

    .testimonials--section .testimonial__person--img {
        border-radius: 50%;
        display: inline-block;
        margin-right: 1.5rem;
        max-height: 8rem;
        max-width: 8rem
    }

    .testimonials--section .testimonial__person--name {
        display: flex;
        flex-direction: column
    }

    .testimonials--section .testimonial__person--name h4 {
        margin-bottom: .7rem
    }

    .testimonials--section .testimonial__person--name h5 {
        line-height: 1.4
    }

    .testimonials--section .testimonial__quote {
        color: var(--font-60);
        margin-top: 2rem
    }

    .testimonials--section .fact {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        padding: 7rem 0 0;
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .testimonials--section .fact {
            max-width: 90%
        }
    }

    @media only screen and (min-width:62em) {
        .testimonials--section .fact {
            max-width: 70%
        }
    }

    @media only screen and (min-width:75em) {
        .testimonials--section .fact {
            max-width: 70%
        }
    }

    @media only screen and (min-width:87.5em) {
        .testimonials--section .fact {
            max-width: 70%
        }
    }

    .testimonials--section .fact .heading--h3 span {
        font-size: inherit;
        line-height: inherit
    }

    .testimonials--section .fact--curve {
        margin-top: -4rem;
        max-height: 19.5rem;
        max-width: 100%;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: -1
    }

    .testimonials--section .video {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        padding: 0;
        position: relative;
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .testimonials--section .video {
            max-width: 49rem;
            padding: 4rem 0 8rem
        }
    }

    @media only screen and (min-width:62em) {
        .testimonials--section .video {
            max-width: 49rem;
            padding: 4rem 0 8rem
        }
    }

    @media only screen and (min-width:75em) {
        .testimonials--section .video {
            max-width: 49rem;
            padding: 4rem 0 8rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .testimonials--section .video {
            max-width: 49rem;
            padding: 4rem 0 8rem
        }
    }

    .testimonials--section .video--geometry {
        left: 50%;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 0
    }

    .idomains--section {
        padding: 8rem 0 20rem
    }

    .idomains--section .idomains {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(20rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .idomains--section .idomains {
            grid-template-columns: repeat(2, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .idomains--section .idomains {
            grid-template-columns: repeat(3, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .idomains--section .idomains {
            grid-template-columns: repeat(3, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .idomains--section .idomains {
            grid-template-columns: repeat(3, minmax(20rem, 1fr))
        }
    }

    .idomains--section .idomain {
        align-items: center;
        background-color: var(--white);
        border-radius: .8rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        display: flex;
        gap: 2rem;
        padding: 2.5rem
    }

    .idomains--section .idomain--img {
        display: inline-block;
        flex: 0 0 auto;
        max-height: 6.8rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .idomains--section .idomain .heading--h4 {
        flex: 1 1 auto
    }

    .idomains--section .idomain--more {
        align-items: center;
        background: var(--green-1);
        background: linear-gradient(100deg, var(--green-1) 35%, var(--green-2) 100%);
        border-radius: 1.6rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        color: var(--white);
        display: flex;
        justify-content: center;
        padding: 2.5rem
    }

    .practice--section {
        margin: -8rem 0;
        padding: 15rem 0;
        position: relative
    }

    .practicei {
        align-items: center;
        display: grid;
        gap: 5rem;
        grid-template-columns: minmax(20rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .practicei {
            gap: 5rem;
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .practicei {
            gap: 5rem;
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .practicei {
            gap: 5rem;
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .practicei {
            gap: 5rem;
            grid-template-columns: repeat(2, minmax(30rem, 1fr))
        }
    }

    .practicei--img {
        display: block;
        max-height: 100%;
        max-width: 100%
    }

    .practicei .practicei--right {
        margin-top: -3rem;
        position: relative
    }

    .practicei .practicei--right .practicei--p {
        margin-top: 3rem
    }

    .practicei .practicei--right .practicei--geo {
        left: 50%;
        max-height: 32rem;
        max-width: 100%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    @media only screen and (min-width:48em) {
        .practicei .practicei--right .practicei--geo {
            max-height: 34rem
        }
    }

    @media only screen and (min-width:62em) {
        .practicei .practicei--right .practicei--geo {
            max-height: 38rem
        }
    }

    @media only screen and (min-width:75em) {
        .practicei .practicei--right .practicei--geo {
            max-height: 53.4rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .practicei .practicei--right .practicei--geo {
            max-height: 53.4rem
        }
    }

    .hdiw--section {
        padding: 24rem 0 16rem
    }

    .hdiw--section .hdiws {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(20rem, 1fr);
        position: relative
    }

    @media only screen and (min-width:48em) {
        .hdiw--section .hdiws {
            grid-template-columns: repeat(2, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .hdiw--section .hdiws {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .hdiw--section .hdiws {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .hdiw--section .hdiws {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    .hdiw--section .hdiws .line--horizontal {
        background-image: linear-gradient(to right, var(--green-1) 50%, hsla(0, 0%, 100%, 0) 0);
        background-position: bottom;
        background-repeat: repeat-x;
        background-size: 15px 3px;
        display: none;
        height: 3px;
        left: 50%;
        position: absolute;
        top: 2rem;
        transform: translateX(-50%)
    }

    @media only screen and (min-width:62em) {
        .hdiw--section .hdiws .line--horizontal {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .hdiw--section .hdiws .line--horizontal {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .hdiw--section .hdiws .line--horizontal {
            display: block
        }
    }

    .hdiw--section .hdiw {
        align-items: center;
        display: flex;
        flex-direction: column
    }

    .hdiw--section .hdiw__step {
        margin: 0 0 -1rem;
        position: relative;
        z-index: 2
    }

    @media only screen and (min-width:62em) {
        .hdiw--section .hdiw__step {
            margin: 0 0 6rem;
            z-index: 0
        }
    }

    @media only screen and (min-width:75em) {
        .hdiw--section .hdiw__step {
            margin: 0 0 6rem;
            z-index: 0
        }
    }

    @media only screen and (min-width:87.5em) {
        .hdiw--section .hdiw__step {
            margin: 0 0 6rem;
            z-index: 0
        }
    }

    .hdiw--section .hdiw__step--circle {
        background-color: var(--green-1);
        border-radius: 50%;
        box-shadow: 0 0 0 1.5rem var(--white);
        filter: drop-shadow(0 0 .4rem rgba(11, 19, 49, .15));
        height: 4rem;
        position: relative;
        width: 4rem;
        z-index: 1
    }

    .hdiw--section .hdiw__step--icircle {
        color: var(--white);
        font-weight: 500;
        left: 50%;
        line-height: 1;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .hdiw--section .hdiw__step .hdiw__step--lb {
        background-image: linear-gradient(var(--green-1) 50%, hsla(0, 0%, 100%, 0) 0);
        background-position: 100%;
        background-repeat: repeat-y;
        background-size: 3px 15px;
        content: "";
        display: none;
        height: 200%;
        left: 50%;
        position: absolute;
        top: 3.5rem;
        transform: translateX(-50%);
        width: 3px;
        z-index: 0
    }

    @media only screen and (min-width:62em) {
        .hdiw--section .hdiw__step .hdiw__step--lb {
            display: block
        }
    }

    @media only screen and (min-width:75em) {
        .hdiw--section .hdiw__step .hdiw__step--lb {
            display: block
        }
    }

    @media only screen and (min-width:87.5em) {
        .hdiw--section .hdiw__step .hdiw__step--lb {
            display: block
        }
    }

    .hdiw--section .hdiw__box {
        align-items: center;
        background-color: var(--white);
        border-radius: 1.6rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        padding: 4rem 2.5rem;
        position: relative;
        z-index: 1
    }

    .hdiw--section .hdiw__box--img {
        display: inline-block;
        max-height: 6.8rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .hdiw--section .hdiw__box--h4 {
        margin: 3rem 0 2rem
    }

    .hdiw--section .hdiw__box--p {
        color: var(--font-60)
    }

    .ubp--section {
        background: var(--black);
        padding: 5rem 0
    }

    .ubp--section .ubp--grid {
        align-items: center;
        display: grid;
        gap: 6rem;
        grid-template-columns: minmax(25rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .ubp--section .ubp--grid {
            gap: 6rem;
            grid-template-columns: minmax(25rem, 1fr) minmax(25rem, 2fr)
        }
    }

    @media only screen and (min-width:62em) {
        .ubp--section .ubp--grid {
            gap: 6rem;
            grid-template-columns: minmax(25rem, 1fr) minmax(25rem, 2fr)
        }
    }

    @media only screen and (min-width:75em) {
        .ubp--section .ubp--grid {
            gap: 6rem;
            grid-template-columns: minmax(25rem, 1fr) minmax(25rem, 2fr)
        }
    }

    @media only screen and (min-width:87.5em) {
        .ubp--section .ubp--grid {
            gap: 6rem;
            grid-template-columns: minmax(25rem, 1fr) minmax(25rem, 2fr)
        }
    }

    .ubp__txt {
        border-right: 0;
        padding-right: 0
    }

    @media only screen and (min-width:48em) {
        .ubp__txt {
            border-right: .1rem solid var(--grey);
            padding-right: 7rem
        }
    }

    @media only screen and (min-width:62em) {
        .ubp__txt {
            border-right: .1rem solid var(--grey);
            padding-right: 7rem
        }
    }

    @media only screen and (min-width:75em) {
        .ubp__txt {
            border-right: .1rem solid var(--grey);
            padding-right: 7rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .ubp__txt {
            border-right: .1rem solid var(--grey);
            padding-right: 7rem
        }
    }

    .ubp__txt--p {
        margin-bottom: 2rem
    }

    .ubp__logos {
        display: grid;
        gap: 2rem;
        grid-template-columns: repeat(2, minmax(10rem, 1fr))
    }

    @media only screen and (min-width:48em) {
        .ubp__logos {
            gap: 2rem;
            grid-template-columns: repeat(4, minmax(10rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .ubp__logos {
            gap: 3rem 4rem;
            grid-template-columns: repeat(5, minmax(10rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .ubp__logos {
            gap: 3rem 4rem;
            grid-template-columns: repeat(5, minmax(10rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .ubp__logos {
            gap: 3rem 4rem;
            grid-template-columns: repeat(5, minmax(10rem, 1fr))
        }
    }

    .ubp__logos .ubp__logo {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .ubp__logos .ubp__logo--img {
        display: block;
        max-height: 6rem;
        max-width: 100%
    }

    .benefits--section {
        padding: 8rem 0
    }

    .benefits {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(20rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .benefits {
            grid-template-columns: repeat(2, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .benefits {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .benefits {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .benefits {
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    .benefits .benefit {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        padding: 0 2.5rem;
        position: relative;
        z-index: 1
    }

    .benefits .benefit--img {
        display: inline-block;
        max-height: 10rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .benefits .benefit--h4 {
        margin: 3rem 0 2rem
    }

    .benefits .benefit--p {
        color: var(--font-60)
    }

    .pricing--section {
        padding: 8rem 0
    }

    .oppurtunity--section {
        background: var(--black);
        padding: 8rem 0 16rem
    }

    .oppurtunitys {
        display: grid;
        gap: 0;
        grid-template-columns: minmax(20rem, 1fr);
        margin: 0 auto;
        position: relative;
        width: 100%
    }

    @media only screen and (min-width:48em) {
        .oppurtunitys {
            gap: 6rem;
            grid-template-columns: repeat(2, minmax(20rem, 1fr));
            margin-top: 8rem;
            max-width: 90rem
        }
    }

    @media only screen and (min-width:62em) {
        .oppurtunitys {
            gap: 6rem;
            grid-template-columns: repeat(2, minmax(20rem, 1fr));
            margin-top: 8rem;
            max-width: 90rem
        }
    }

    @media only screen and (min-width:75em) {
        .oppurtunitys {
            gap: 6rem;
            grid-template-columns: repeat(2, minmax(20rem, 1fr));
            margin-top: 8rem;
            max-width: 90rem
        }
    }

    @media only screen and (min-width:87.5em) {
        .oppurtunitys {
            gap: 6rem;
            grid-template-columns: repeat(2, minmax(20rem, 1fr));
            margin-top: 8rem;
            max-width: 90rem
        }
    }

    .oppurtunitys--bg {
        bottom: -8rem;
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
        width: 90%;
        z-index: 0
    }

    .oppurtunitys .oppurtunity {
        align-items: center;
        background: var(--white);
        border-radius: 3.2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 5rem;
        overflow: hidden;
        padding: 6rem 1.5rem;
        position: relative;
        z-index: 1
    }

    .oppurtunitys .oppurtunity--img {
        display: block;
        max-height: 20rem;
        max-width: 100%
    }

    .oppurtunitys .oppurtunity--h4 {
        display: block;
        margin: 2rem 0 3rem
    }

    .members--section {
        padding: 8rem 0 24rem
    }

    .members--grid {
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(20rem, 1fr)
    }

    @media only screen and (min-width:62em) {
        .members--grid {
            grid-template-columns: minmax(20rem, .9fr) minmax(20rem, 2fr)
        }
    }

    @media only screen and (min-width:75em) {
        .members--grid {
            grid-template-columns: minmax(20rem, 1.5fr) minmax(20rem, 2fr)
        }
    }

    @media only screen and (min-width:87.5em) {
        .members--grid {
            grid-template-columns: minmax(20rem, 1.5fr) minmax(20rem, 2fr)
        }
    }

    .members--grid .members__txt p {
        color: var(--font-60);
        margin: 3rem 0
    }

    .platform--section {
        margin: -8rem 0;
        padding: 15rem 0;
        position: relative
    }

    .platform--section .bgimg {
        left: 0;
        max-width: 100%;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%)
    }

    .platformi {
        align-items: center;
        display: grid;
        gap: 3rem;
        grid-template-columns: minmax(30rem, 1fr)
    }

    @media only screen and (min-width:48em) {
        .platformi {
            gap: 8rem;
            grid-template-columns: minmax(30rem, 1fr) minmax(30rem, 1.3fr)
        }
    }

    @media only screen and (min-width:62em) {
        .platformi {
            gap: 8rem;
            grid-template-columns: minmax(30rem, 1fr) minmax(30rem, 1.3fr)
        }
    }

    @media only screen and (min-width:75em) {
        .platformi {
            gap: 8rem;
            grid-template-columns: minmax(30rem, 1fr) minmax(30rem, 1.3fr)
        }
    }

    @media only screen and (min-width:87.5em) {
        .platformi {
            gap: 8rem;
            grid-template-columns: minmax(30rem, 1fr) minmax(30rem, 1.3fr)
        }
    }

    .platformi--left {
        position: relative
    }

    .platformi--fimg {
        display: block;
        left: 40%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%) scale(1.3);
        max-width: 100%;
        z-index: 0
    }

    .platformi--img {
        display: block;
        max-width: 100%;
        max-height: 100%
    }

    .platformi--p {
        margin-top: 2rem
    }

    .press--section {
        padding: 16rem 0 8rem
    }

    .presss {
        display: grid;
        gap: 1.5rem;
        grid-template-columns: repeat(2, minmax(10rem, 1fr))
    }

    @media only screen and (min-width:48em) {
        .presss {
            gap: 2.5rem;
            grid-template-columns: repeat(3, minmax(15rem, 1fr))
        }
    }

    @media only screen and (min-width:62em) {
        .presss {
            gap: 3rem;
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:75em) {
        .presss {
            gap: 3rem;
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    @media only screen and (min-width:87.5em) {
        .presss {
            gap: 3rem;
            grid-template-columns: repeat(4, minmax(20rem, 1fr))
        }
    }

    .presss .press {
        align-items: center;
        background-color: var(--white);
        border-radius: .8rem;
        box-shadow: 0 .4rem 1rem 0 var(--shadow);
        display: flex;
        justify-content: center;
        min-height: 11rem
    }

    .presss .press--img {
        display: block;
        max-height: 11rem;
        max-width: 100%;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    amp-img img {
        object-fit: contain
    }
    </style><!-- Custom Script-->
    <script id="homepage" type="text/plain" target="amp-script">// Navbar
const navBtn = document.querySelector('#menuToggle');
const menuBox = document.querySelector('#menuToggleMenu');
navBtn.addEventListener('click', () => menuBox.classList.toggle('togglenav'));
</script>
</head>

<body data-theme="default">
    <amp-script script="homepage">
        <nav class="navbar">
            <div class="navbar__wrapper"><a class="navbar__wrapper--logo" href="/" aria-label="Home Page">
                    <amp-img class="navbar__wrapper--logo-img"
                        src="data:image/png;base64,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"
                        width="113" height="43" alt="InterviewBuddy"></amp-img>
                </a><svg class="ri-menu-3-line navbar__wrapper--toggle" id="menuToggle"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -53 384 384">
                    <path
                        d="M368 154.667969H16c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0M368 32H16C7.167969 32 0 24.832031 0 16S7.167969 0 16 0h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0M368 277.332031H16c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <div class="navbar__wrapper--menu" id="menuToggleMenu">
                    <ul class="navigation">
                        <li class="navigation--li"><a class="navigation--li-a" href="/" hreflang="en">Home</a></li>
                        <li class="navigation--li"><a class="navigation--li-a" href="aboutus" hreflang="en">About Us</a>
                        </li>
                        <li class="navigation--li"><a class="navigation--li-a" href="pricing" hreflang="en">Pricing</a>
                        </li>
                        <li class="navigation--li"><a class="navigation--li-a" href="testimonials"
                                hreflang="en">Testimonials</a></li>
                        <li class="navigation--li"><a class="navigation--li-a" href="ourexperts" hreflang="en">Our
                                Experts</a></li>
                        <li class="navigation--li"><a class="navigation--li-a" href="resources"
                                hreflang="en">Resources</a></li>
                        <li class="navigation--li"><a class="navigation--li-a" href="contact" hreflang="en">Contact
                                Us</a></li>
                        <li class="navigation--li"><a class="navigation--li-a" href="whyus" hreflang="en">Why Us?</a>
                        </li>
                    </ul>
                    <ul class="navbuttons">
                        <li class="navbuttons--li"><a class="navbuttons--li-a btn--secondary btn--grad-green br--lg"
                                href="" hreflang="en" target="_blank">Get Started</a></li>
                        <li class="navbuttons--li"><a class="navbuttons--li-a" href="" hreflang="en" target="_blank">Log
                                In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="header bggradwhite--tb">
            <div class="wrapper">
                <div class="header__content">
                    <div class="info"><span class="label--primary">Live | On-demand | Anywhere</span>
                        <h1 class="heading--h2 info--h1">Virtual face-to-face mock interviews with industry experts</h1>
                        <p class="info--p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="info--btns"><a class="btn--primary btn--grad-orange br--lg" href="">Interview
                                Domains</a><a class="btn--secondary btn--grad-green br--lg" href="">Get Started</a>
                        </div>
                    </div>
                    <div class="video">
                        <div class="video--achive">
                            <amp-img class="video--achive-img"
                                src="data:image/png;base64,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"
                                width="164" height="43"></amp-img>
                        </div>
                        <div class="video--box" style="background-image:url(assets/images/edbb228a80936e9fb59b.jpg)">
                            <div class="playbtn">
                                <div class="playbtn--arrow"></div>
                            </div>
                        </div>
                        <div class="video--achive">
                            <amp-img class="video--achive-img"
                                src="data:image/png;base64,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"
                                width="164" height="43"></amp-img>
                        </div>
                        <amp-img class="video--geometry"
                            src="data:image/png;base64,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"
                            width="608" height="478"></amp-img>
                    </div>
                </div>
            </div>
        </header>
        <section class="section testimonials--section overflow--hidden">
            <div class="testimonials">
                <div class="testimonial__cards">
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Vikram</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                        </p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img" src="assets/images/be6c85b326aea60d38a8.png"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Dr. Akansha</h4>
                                <h5 class="heading--h5">TISS</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I do not think there is any scope for improvement. You
                            guys are that good!</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I would like to thank you and the InterviewBuddy team for
                            arranging the mock interview and the feedback report in such a short period. Regarding the
                            experts, I think they are not only experts but also one of the best among their fields.</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I would like to thank you and the InterviewBuddy team for
                            arranging the mock interview and the feedback report in such a short period.</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">The Support was fantastic. I got connected with a really
                            senior industry expert who guide me in my career planning. You guys are awesome!</p>
                    </div>
                </div>
                <div class="testimonial__cards">
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Vikram</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                        </p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img" src="assets/images/be6c85b326aea60d38a8.png"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Dr. Akansha</h4>
                                <h5 class="heading--h5">TISS</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I do not think there is any scope for improvement. You
                            guys are that good!</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I would like to thank you and the InterviewBuddy team for
                            arranging the mock interview and the feedback report in such a short period. Regarding the
                            experts, I think they are not only experts but also one of the best among their fields.</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAADAFBMVEUAAAANFDQGCyYEBh0FBx8BAxmtm4wFCSHDw7YFCiUBAhgCAhcKDyfKvafKwqcIDy3FwK/DvKrSx7HNxrLe0rjUyrXRybUCByLq3sIIH0XVybIDGULGuaW6uqlwcHMMJk8ubpnq4MNsZmbKxadcUFSvn4+fj4eXj4sAABMAABYAAAQBAA8AAAoBAhkADi8ACy4AEjQAAh0ADzIABycACSsABCMJCR7Ju6jc07/Guqza0Lnaz7UMBhXFt6dkOzYADzXl2r/JuKUSCxsJH0bYzLRALkDj2Lw0ISwGG0ABFDoMDyYiFCI7JS5JJi5CHyfu4smukqDf073e0rgEGDvFtaIsFBzb08XW08fq3cPIu7HSz8OTbIFdPFGogZU4JzmujJyhd4F2UmRjSFoNBAxtPDqykqVQOEYYESEnDRSpipaedImme4ebcIJGLjZdNi97SkspHCrg1rinfY+NZXnc2NFTPE9yQ0Xg2MvYz76heZCFYndZOTtjNjdBKDLZ1sxdMTlNJSkvHjG6lKihfIZYRlUOJEtPLzZAGyCvhJiriI+pgYucdHt8WGotFiXg3t24j6K5qZhNNT5UMC42HCIdDxng18OFXnFePEJZLjJUJi21iZ6XbnJ7XXBGNkfPw7eSZmqLWF2DUFIdIDbe29ZtU2B6T1dyS1JnQD0YFy0YBw+WeoRvS1tqRFBXMEk2EBfNv6ugjYmVaXtwYGkqQGbAmKzArpyhhpGRXWPJybyYf46HfX9mVWsXK1HMzcJOJUOxnpmEUl0qKDpTUnCEaW5lQ0kaIkO0opGTgoAjNlqJVVcyLkdLHCOpkJuIbIbO09ClmpR4bnFwSmdJQlw9OVDSysCorri/urDTxq5WbI5tZHhgVmFVTGCut8GUcopGXICLc3Z5UnNrP1/Z29iBf5J9bH9fXXq7xMs3THG4sKnAr6evpqNscYuAXF1MREpqOkQ7FjCbiZ+IYmKXoa18Qz/Qt7CDV32Rl55nf5uSjIzh6Of37NS/n7KicHWoRTfIl4q/aFzG2iv8AAAAKHRSTlMA/SA/c8T9Xv657+ClIBDf2nNfQOS7lo7maE1G77iz36VwZzDPj2BA8TgcSQAAGYJJREFUaN602WlQ1HUcBnArIy0ru4+pZrp3Q140TSzIMcK47gy7ZDRAwcJy2W6wIBu0yCnnIHLEcp+Lui1CKwLLyLEwhRzhCBm0oARkVEBxKF1OOWXW8/39VyGzw46HdZ3xzYfnd/0P11xzrr/hpvs2rL/99pvdKLffuH792rU33Lbm/80Na9ffYvvs88899xxM29W5fcPaG/57j2u69sabbSjPIpzmiigUrpYoVBtuuv5/UPk8Hp/PB8xCriNpXBisUEnOPvLYrf/lCG+4mcfjWSMhjo6OhIhVqTKZUHs2gxKsVhcIk0RihUql0mZMPvL0f8XeCBUuj8dUhVgsVkmEWnVGxuRkC4teH+ynlotUYnG9TDs10rnxzv+CvcUaJAJVQWieSBYhz9C39PVNGwwmk6nNZDJIp/v6+vyENM89o1OTY3b3P/qv21ojxFJTkSgpKaKgrF8f1DdNaltbKNJGtMHQPN1XrLCt1/UMjs6v2779/gf/zZK60cZ60ybAfEfX4jyRCGpCWf9B/Rkqm97W9j4L5Db8DnubmyUq13rIPd/Pb0fu+cfL7LGbHXkMdnQsFudJIjLL+hsO1p45c2bfvqqc9OzQ0BeR918EjexF+vxcXd10uusmhn8k+R+O962PDNra8KzBoq5YJMlMKGPsN998U1WVEwg4AC4FNCdXBUlcXXU6nbkT7Cv43P8PSt/hM6kDDNfSF4MMFyz6orDSAr/66osvBkAmOPAbeTHBgyO7oL6CzzWXvu3e+fOjOCIwvwoF6iYVJBB7BixzcwKVe/PTXuUCnoOVOftkCrd63XtdHSWvULZs2XLvtQ3zRp/FiUFbWxtrnqMCuzYJfVdguKthuBycrQys0qoA67o6tmzn4G3b7r6G4X58o6fP8Gj983yetSMOKVFEZgFcGuj2S4UDlVn5R9KI5iaZ3Ozs9JxgoSvgyXUl27cAhnst8oMPuQjsh3vcnsXKKhZjE2Fd1fXHRB7Yv78dLi0tgivz09LyAVMCOFiZ3pKBDVVvXgRMYfLf3dJ3uri4CDzP69xsAItV5CbU1cWswFQ4XbkXMtwr4L5JlU7nZv5+M2CL+/rrL935N10nF4Gms96WlrRKUpCQgMJwIw8cZzDJgKNCA1gsMFwkvU8v7NFdNzhRw2Bi4b7kAPkvXYEAhZs0nW6OfMywKIJYZ2cm/xb252TaUAEBKBylzFYqp1u0PfXXDXYBhkvx8Hjp78gPOgkgE2xLcDHt37K6OmeMNQdXrcD+q2GgSHZVLoN7GYy+2173INnB4S/m+daHPFEYcPeIrSOPwZhgZzTecQnOMRpz2CyjcihKY5oDAkL9o6LSaclV9akB60adaCtRyN3s4OBw9+N/4XqisKegaXjE5jLsvAquugAVLoP9/RlMlf39o5Qk5/QFy+rddKP22xmMztSX8qe7ykrj6YLGnk6A2RW4WMTBNNRscV24oAxECIbMwdjOL4aSHIhUBQnr3XrMgLcxGUuLwVu3bvzjW9EnrQZaPQl2YY0dWWO4O3dyMEb6QiDtGiW5cXGozGCcJAF0cUxHAqflKtueiXFqvBoG/Yen5x0DA1aaVpdLMJ/PA5yZ4JzI4MjVsBIEg3GlYJXbTAaW9HSDOtVV2LkVMHMJBko/W+/4wwnWWA1oPD1pcQ23ONJth9i9cCfCtlPt0f37sbaUyijAYWFx+MTRPGdl+fubTlR3dXXNnjCZ0tODhbZnFz3oAvE6wlzIyLjV1ad5o4tL6wANNubYfrFTgcXlmse5lDp2WO8zhoeHYyrDw8PC8YdyWhpf3TVlHjWbu7omThiyW9S2GfPbGEyxwJSBh6860FhXqEyD7enpNH9eTHDRTmcOTkys62+orc0tjTaC5iLlvqPjPwxWjw4ODo6ap7ripdnVU7ZT67ZcDdZo7rjKQGs0A9hIA1boDPjUsMwVlwgJwVhdKXsavYpEEQVyv2B9UG5paXR0tDE6ujQ+PvdDP6FMlZo6OPoJ5UvzVEvXVP2kL+4CMMkWeDPB7NP0+8G+t1WD6fXUYH0RbD+sVQBOYo0L4b72mpeXSCIUgg4+FBRUWhpfmlua++FnfoeFMmTU/MlHH330ySe9c7NTo/WTHRwMmU3yZXj8nivduwSekDHKrQOAIQ9Pqqw3FdNmKixsbHztbUqxmJ4ghMLDh/2CcnODDuV+9u67wiShUKtV98798MMPoH+YmRmtv27KB/AqeTOdXbS8xrfedeXKEsDUwKQQvDjSw9tUXJjoXEhtqW9eHh5RUgFr5Wq/d4VyuborA6bQAi99RFmamTHreiYXX/mRyQwm2QEBLLiy8p1NTQKMM2DaxgiWtYz3THHhTriNXkieCEklWAbTL0kmVzNYTrA6o2tiieS5paUT5p7RFoIts+zBVaZ5dhgXNI3/tvLd4wKktRVykwAXZE/7+fNCNM5M2RPiJUmSSEQiCX2JWGmhPEMu1we16IPVci0mWKvump2ZWVrq7Z2bmGgJVreYarYDxhkCeRuDmQx46+a7V7tPOaGxgJtmuJAFTt1nXTc5ehV5heRJkiBLcMcXkSRhpalicFBudbU+WCtkY6Cd6p2bm+sleXZ2umW2jWAabHZ5AsxGG4sLv8Dqyk90CwC7OK3ATk7zGQrrkLe9XgvJkwEkt6CgIEKUisiE6mA94PhqgkmWDY5CZfAJU2h19WzJj+RCtsAeHtw0v+SxedUs3+AqGsBYU4gU4COw9xnufObtohckIhSmQc7zEmN9parwwJgqVGfo46Ojg4O7MrRwxQrX+sGluV6zeWpi1oSrxYmMmh/JxTECmWh8uN2MIV+pvIFgoPQhGG6TU3dnS0ixu7u7JCJCIimCLC7GLacslWBqHC0NBzylRt1UVf3gKOCpXhzXcEMZzMkMRt9LWwp/Xb5KXc93VVlRY4gs9vb2NQvTwQVeL9TtLMwskEuKsKhl4pAQsVAow5NFjxBTHB6V9aG+a3JKjQ01OGjuxRRPTOAygXv7AGmGz3YEfdGYuVxYZYe7b7PAN/EVEmrM2toz16dG05/5wguFgAszM5OosUSFqoCxroVaDo4u1eOaFJxhNpuxuMDC/Ro3YAGG4FO7AKMyB9vZWWQGO1w6sdfzFHLNuAs3zAiDuxPc97gXOgMudM9MKhIhOLUAYzFhUR8CXBkWHRT0aXz1p10IljO2lOnr9+le16Cf9wYMt6SkxNKYbSmcmoDvsYy02yZRX+sluOkSXJayp5BO6vJC97ICLC8ELoufn19DbU52ZVZYdGmp9LTpBDIz8zVCT48EV8/77tq1q6TEjoNZaarNra6m27iRdrPWWnk2sU0EFB/APt3JQwSTXN5fVpYZgRRocU7K5XLAtUcDsyoroyBLw+JMptOnT5sIpruRfAaPeXt7x8bGlkD3sCN4M35IRu8mbqw3uFmf9RRcCVuVAy53RhKT+/v7E7CJ5WCRsjK/suXa9sCs/MqsKGO0MQy3IXGATW1fv//qkSNH8vP3GqoXO15+2XdsbMybwQj7io3lYG6sb3leOPISHZRECgSMpaGuGELjHTtiYmJw73GwgeXgoUMNZcnlyTH79ykrjxxJyw8zlkKOiqIbIf/8NLhovDfdMO9TU1NzymeMjbclm2MtcM06dnq4PS9rcQDMzqvL8MKZZIKdAUdGRtYe5EJwcnkFg/MJiQovNYYDRvyz0gCnEdxmWDxFqfGmoV6hL8N0hjzgZivWb23CjRYLXAb7dDfsSSmsA4zbywMHailH6ashOaUiMZLgn376KS0rrtQojYuDiilnffMr8SDVtjiPUGFuda2C7Qi+g02xjSPmWGBhGczSV7YnpQ6VGY0cZaldrhgq3wH4QmUa4MosaXQ0bnTZ0/JPgDHxWdnphs7OzvPdvrsBrxRGoNpR5YcB327Lt9YOOAGmrMA1x85Y4B3fcfBxBidXDCUCbr+Qlf8TTWicNB7TS+4RwHDx4Jg+jReN5xdf3v0W5FVwrN1WgmNrNuI1Sz3edMiOLTStwMTaY5a7i1KcOZjk48eP79+/n+AK9pBepcTg5mNkpdhRBB9BUBgPylFhs1Pmue9Pdbzzxhu7EG9vO+BgoXLwqduwtgCr9K01zBU0+ZDMvs6dK3JPWIHhtre3Hz1YUVGBf4o80G4M49ayND5aGseGGmxlFh40Ag2dExMzi6c6fC/DdvggaIyJBnzXmrW2NjbW4rMaBrs0jTfBJBeVxyRXh8t3JCbGRB7dZwzD/Brj8EWVIZObhQcco+HY7NL3J9e9Q/BuwJBxnIC0i7XAd65Zy+Pb8BzfbraHqxnubBlZwHCz1NQUFAAmeRXckDI0NNT4WmPK8qGgzw43Nn7lVxoGmS0vsPTMmNM3ff7bb09+/MU7H7wBGTAL8VC97Qi+d816wHzHkGmN00Jrc+dkRkv3AlBuqvUNCSSzyha4dplg3AAO4QXjZ4fd3Q8HSaOkUmMYZHI5uPP7b08C/uCDtwCvyAwlvAPwjdYkb5o85qIZGJns6dHmDLhgjZ0757Ow2NyXmZDIZO7VCxK5XAEXGapIPtzfcCgoVxpVGRduDIdMLF4M5ABm7hcffP75W6At8sv4wT4G7dtx6h7A+H8GPk+m1wwMnBWqRJkHLlx0caGVvbAQaugrK+dgyICPHo1JxOJC55SK5LKyQ0FY0NQ0KjwcMlR6fA03dn59EjC5bwImeTdglrExDt645hYenyKW46lJlqpQveB8vP3ixVaXc+fsF5qb9x5M2JmYyMkHaB8vJ5aXl1dUpFSUl/X3o64hLjQLI8w9OirTwxBj9PlvPz75McFvAqbKuwGzyoB9cfUgmA+Yx7OxFjU3D7u52uLtQ2Pjz7/8chHyuenh2GO1hTtBJ7LOB2oPLicmJyfDTkbdoNx4gynOnxIVLpWGQ6fEV6Mu5yIE7+byMuLLwevWrbHhE8y3Fo8cG9bV2+DVllfRzz8T3XruWHds97QFZnJMTCIuTZTlhlwk/nRYHM5L/AkjWUoxxlcvzZz8AjNMrqUzcyljFrjjMqzQHxse1NngZZ646Lufib4IeGyhubDQAlOWATO5oba0lIMRgsPIZHB1de8SwZ9fAXtbGvty8K+M2kloE1Ecx3H3HRc8iIie1cSkiZrTYCEStInppXjRIJgR60UR1ItbKiR6sUKtaIV4cEENsSU6ICJppWhNcKkNorjGuGBQqXHB7eb3/17UMaj4QyddDp/+/+/NTPLeeNiqw3YYSwZG3e710XVZlU91XV/z8ejJ6ODAwKFt+zs0vebt27exDiZXLHYImA+q/N+08vFjFgU2ka1nyabL5x4krHsfHvU/+4aqYC3DAiNrmD0zimZhOnQu83Dw9rXe035Z7VnXdf3w9rZA72Cctx5KXvQLliG+whiTQmF18tPNm1slwPCXH8SB7315BExqYaJhvV9Imc5obuDi14sDg73NbPUYjrlmKmXMm+PbuCqwW8ms/Gzf3nG4RdIY3t3Gp+RIpKenpzNSKpWSyaRaJwCOB7JWMWt96Nfws2fPNhMta7hbJtd4D2exnMqO+JNcZhRzO5PJ5XIXzzVTePOqZp+fcxu5YwPy9tj+luuNjV1dXeHdkUiU9FRaK5VO/oZogc9SkuTtY3mrnE3kvzz6RvYdB9auZrtXrACeDMzkEtk5+D6XyWRGvXr16tKlS7cuXmuebYbWN/uNUOv6cMvh/R0Cd7S0cNUCbgx3bpEEgHuAt8jiyFZGPbn62lDLsrKJpcUvcvHqp2Lpta4X9Ac8ct4PuO1cJvcil0Gl4NzF+9eCRurAgQOGkdoRFjm2/VTscCMqYYmgq7XSSiqdpZt0uhDZEo3uJavjfa6ilUgkFi9ebJWLXz7QcGBkXA33d3dfmDlkgo82S2ZvXD8qQy5lcvEHA+ffsaRgmKZp+A2ztT3cwrUqtj3W0riHNDY2ViphhpcWP2VqlT7dRI7ETzDbooG+pqKFSrJ5yypym+KCMuZC/07V7xU/4Gk+TicVf+jqpVvAFwd6B8/deP38Ya/PnDvXbDbMdcuBW/Z3xDqAUcPh3bt3M6kiTwulT+8e3/z06fHWUiSyJZ0G3tW3tGwtXbyYf4mEDPXnD5+5Wd3t38z7oM07OZ0EnjJktNqNZt9jjsP55Elu4MGR07TecezabZabnGzwsXPL52Q4ij7cEpYwp5VZ+kRKhaelEnOqEI1E0+lIIJiVAZZA65arV8p/8+XznUfd/Tu7u7unDBmuqmVmy7yOxweP9Able/Zw/JxihGabqXVKJlU4TI8lhUJBjqWDyeTqKG567aoF+TLl6oipYSWXi6wKfX70EnjqkGGMLlF776YJxUzz+HgjBs93c2m2wVgvb2dsgYWVhHs6e3QY6KcFmVUn0idOsErutYp1DU3KbWri30+7Wnj5+Yf+/hUTh3Bf1OEqIv12cLcKijubTivY6fQbUnP7HiVW6Qrzq7IDNgKbPJgEZt88cHooE6pB0tTQRKp/gqLliGxZ955Plk/HUjEKI03d6mLi9/E6W7sSw0ButcnQ8jUTmwtHSS4cAqcjbbuCQ8v5LGzVbgC2R7fdKs4CHuHxQDociMHTp4M+4nRIYKtxGs0OZ2q5gvWUDnOMdZ45kz646TFZueng3jT17jLmLy5mAaupq0eu5pcMPR1YzS66zCgHpcec1pRqh5FNvzGXbu+hUNxYjM23K7C899m6kmzauleeT1i10ZPN5xcrUuL1euvqqu6PJjSJnpgxhMijFpTsQ/VRPE12Smww4ZwyU+3tCkbdJpuc8h6E+6KCV+NuWRLy5K3EUu0St9vlqmOY0Zoa6uvr+RHzDjg7RDISVxeLKTdjDna1WnPIlJq7pN/Q7Nojp8Xem9wLy4f2uJ8RLnvrGyCgXQsWuF2qQqlXUOqnBzRhgoJH6OdYqq4EtxbmCmZS8/LlyHsYYGR6TdLM5rRyjwSMYJ9l1atAAFMv0a6OhhliMtFWLSSxsb++NAwtE1oOve1QJ4mQtW08phFfFXIG8/mshr0uNwV7GwSFtYduD4MlY6kW2Oai1QbZzyG1ToK9jO1dVlXJsgqrjmvbVrF7MrScaNCu2w1MdTXxqorHglZ7XVMw+QtsIkvYoVgmWdLOrXHJsvVrA7xp8fSVl7q9yv0jjOty8UM6rTJs3DwPMixwjWw/pxwcRF4OrHDJOp7BaWPhvJULwdC+cpObJgu6gKOX1P8Ga5lO60ygYl0yYK1sm9lOLR+Ak/DKei5b+WvbAiE/Z0M+m23QKi5xAVF/FVUFk7oJv5aN/wX/QQb8CeO2McApE9jKL6334s6fX4Vxyc/5jCuw7VE39ZRYLQxTE0f1J1KzoIyzsGsDG51OuZ+X82jzSVVG0bKOht0j7Q8xzSb/ATv0q6nkdlwNLwk55SbjK2fhauA6O+wVePQvV98bqRn4X7T8XjoOfSCkWOWuNU0nl7vg0Hwf4C9XwVrlqGG3exJcTcnAkr/D8ktcFZPnrHBZRl+/xHQAO47lh7oXavanC0zssouC7RmpYVv+CM8WWCcVauU8Zk13Y0hf3/us+QttMC7R01rpuMAUXFsysMSm19CYc/he0xxNeZCu9YDp5JQgfWWPZyF01QVVMKmD56gmF1O6tuQqWwMj1MJOZKKe9GqWbWb13OT32u1fN3EgiOP4LWd0gqBLiaIUSWkLrWGxl5aCJnKbZ+JF7hXS0lrKY913ZozWZzkoJNxPYCMoPsysWf8Rju1bITCDDKsyMZmyxQdeDF2mL3Mvw15hHnwo/fVN052JhKp9R4+VwBZKRv8HdhOoQbJBo0k6EDFfNiFRiX5esD+NIQQ5MI9t28pKhpjACk2UVZiCM5HGm204i8RrjEc+u3aYprDn2ZxaZ3AtwZUInGJb1kizdSMpLHkvZivoPSikhaIDm3Ig5ZuLCoPyIAavk7un0aPJ1BNyCCd5t6Nqdb18IWBxWbh3FwqFCaJEZUReKkyjx7O0kkdgcoZzm2vkrIfigYPAa2DPmwJXfVhj8PLCH0DHe90b7XzX+NzO83Sv4jv49dDWgSGIFTl7yQXe3/+G+Ei+S+5IBN9xYV2jR8KrEA0+HrcReKUVW6UJNXdy8b+283E42bs/DZDByGf4dKpi4JuFj2CHeym/8nFX28vbrFyLCSw+rY2S6njkBXA0uO+iksfLLvI4XFgMbuIZLqK528NhDE4y+6TrZVP92d41rTPYAly2L3uBc2113YftJe5nZUsPxrJFCHUVm8ZQy/a0X/OmB461ysQmzc+7yHNFBjBqhwMCxwjbxZ32tcBFHzYc2g3G99KvCsDMISzD7ElVuhqxMnhz2gJX+vOi9ORK1fI7ukJWahwWmZqdUxS93hzKitDqIgwqLqe4V2Rp1kdw8D66tnMrTgpptMI5MEnw8tq7VbL5sGIC2bVa55D2xWmv3Yb+kuBXuTcYUlyXXadau4cwFBWvEuycW1dDuOpVPKPNX8hynmBjgRlGdGCS75zbAr5uaoFrgQvWuF8t1zJZFCmotksqAq7Gsw2XkJstC8JsbXBt5X7rvpAEa6R+r7CXMFHR5U1Z9WFk2O/ehfQL2hDRgRlG1l1CoNySqolOIQav75X9Lj0NEpP1QJCIqpXHWnb4tcJ1B1PtrW476sPd8SVhScnrbYLDKp8vYG+WiZaNy9U3WBW9RiZsYA2DPM1swripPZv7Di4ULmBD4BCaK5Z74mZZ2pBvfzMdve7cXNy40avBT4uHxx//N5OfWTabTu90wp4/PT0/Pz88Xt/fvwY7sBfUymfOAAAAAElFTkSuQmCC"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">I would like to thank you and the InterviewBuddy team for
                            arranging the mock interview and the feedback report in such a short period.</p>
                    </div>
                    <div class="testimonial">
                        <amp-img class="testimonial--quotesign"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAaCAMAAAAOh8UzAAAANlBMVEUAAADv7+/v7+/y8vLx8fHx8fHv7+/v7+/x8fHy8vLx8fHx8fHx8fHz8/Pv7+/09PTv7+/x8fHGRrvzAAAAEXRSTlMAIICf32BAEM+/kO+wfzBvUJBYvicAAACVSURBVCjP5ZBLEsMgDENxMJ+kSVrd/7IdnBR71EUPUG0Y3kiWIX1UsqQo2YudbgAQPU0BrcFwYkiPCboBz4jikt6jD5jcs2KSu3PqcjwJiFLiC2w8Ijs4LYGQINA5URkUSqgZ2oNaM5cULlEuWR1s417hSqYAXvTUnjhSaebOa6ANEBZfzLFwLX455M8dTVwGwt3++A2bmCEPHR9NpwAAAABJRU5ErkJggg=="
                            width="33" height="26" alt="QuoteSign"></amp-img>
                        <div class="testimonial__person">
                            <amp-img class="testimonial__person--img"
                                src="data:image/png;base64,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"
                                width="105" height="105" alt="Testimonial"></amp-img>
                            <div class="testimonial__person--name">
                                <h4 class="heading--h4">Prathna</h4>
                                <h5 class="heading--h5">GITAM, PLACED IN ACCENTURE</h5>
                            </div>
                        </div>
                        <p class="testimonial__quote base--18">The Support was fantastic. I got connected with a really
                            senior industry expert who guide me in my career planning. You guys are awesome!</p>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="fact">
                    <h3 class="heading--h3 weight--500 lineheight--14 textcenter"><span
                            class="color--primary weight--900">87.96%</span> of people come out of an interview kicking
                        themselves for not performing better. InterviewBuddy helps you get into the top <span
                            class="color--primary weight--900">12.04%</span>.</h3>
                    <amp-img class="fact--curve"
                        src="data:image/png;base64,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"
                        width="825" height="210" alt="curve"></amp-img>
                </div>
                <div class="video">
                    <div class="video--box" style="background-image:url(assets/images/c4f091b3c759e3ab9577.jpg)">
                        <div class="playbtn">
                            <div class="playbtn--arrow"></div>
                        </div>
                    </div>
                    <amp-img class="video--geometry"
                        src="data:image/png;base64,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"
                        width="561" height="411" alt="geometry"></amp-img>
                </div>
            </div>
        </section>
        <section class="section idomains--section bggradwhite--bt">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="label--heading">Interview domains</h2>
                    <p class="heading--para base--18">InterviewBuddy helps students and job seekers crack interviews &
                        land their dream jobs!</p>
                </div>
                <div class="idomains">
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Information Technology /Computer Science</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,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"
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Core Engineering</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,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"
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Healthcare</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">University Admission</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,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"
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">English Speaking & Visa Interview prep</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,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"
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Sales & Marketing</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Behavioural & HR</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,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"
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Management</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAAC/VBMVEUAAADg9v/g9f/f8v/g9v/g9//f9P/g9f/g9v/g9v/f9f/f8v/f8//f9P/g9v/h9//f9P/h9v/h9f/g9v/g9v/Y3OH/0V8wgNL////X2+Db5u3Y3N/t7e380V/h9fn62HvX3OHc4eTZ3uL5+fr9/v7d6/L8/P3y9PXt7/Hj5ei3zdnf9PzR7Pzs7OzZ29y0vcXn6eze4ebX3eXW1dXP0dLb8vve7/j19vfQ5fBmpODY19fLzc/y4J5FWGz+02T/0gPc9P/V7/zv8PLq7e/f4+fW2+LU2eDEyczJysugqLF3ipljc4Tp6+7X3+fb3+RyrOPC1+JgoN/W2du80NqqydYeoNKhtMGtsrjbRzjZ7/jB4ffw8fPg6fCXxe3k5+rI3Obf3uCxxt1anN1fmthGj9g7h9Snu8jJxsfDxccUk8XdxsTb3MKvt7+dpK2LmKWEj5xVZnhRYnX/lQDN6fux1fOhyu3W4uzM4uzd5Ova4uqhwN/O1d6Uud5RltvY2dlMktlZstVDi9Q3hdTEzdK4xs+8v8Tr58CWqrhrybelrLOQorDn3a2TnKZxgpJqeYleb4Hrh35aVG3/1WHmaV3TYlj9lRDV6/XZ4+3t5ubk5d212tmjx9ZQktXFz9Tc2c6U1Mi1wsfn3q2ao6yMlqDtpJ6QkJjm2JGrroxwfYvrlITShYDn03xdZ3diXnbVv3X72XJPSmu4o2r+1mVIWGPmzFnzc03Ww0z4nSr+Thr/TBb/RRHE6fe12fTV5vCNv+qFueeNzebd1913v912wNyBrNldtth0ptji0tVAqtPp6850tM7c1MmkscdorMexvcXd08SnxMPL0sKmr70Yjb25urvNt7t0yrq2t7jJyLaFtLHis6jg16SBmqDanZvAmZrkwpjHvJGyio7bzIynhouRf4nl04f42oJnZH5Kc3zpt3rr1nLtjHH72G89UGXQsmLvgGLfwWHwrFWFhVVxdlOpp1LyqU3y1UnzpUjmVkjQTkH3XjX10zS+rC350yT/QQzD3knXAAAAFHRSTlMA3yAQgL9g78+vcDBAUO+fkI+fv98yeL4AAAW+SURBVFjDpZh1eBJhHMdhDBgo5ntwp6hwIAPHBIZzTmWo683ZOru7nd3d3d3d3d3d3d3d7eP7njLu2AuCfP64cXue+zzf3/eC9+C5RyCTZg3iiwEAYr5QEphZwPOZzIFBwJWg7Jl8UQigAg9fFOC1Qww8kCPAfwciUPDPPviAC34uz0GyA+/I7iFOALZUfBy37WSC03ivyeRGIga+kEXmvwQh81+C0mQYKgDTie8VI4nvBHFPeCD4P7Jzrljwv2R2O0/eOufy4sg/r0gICE+ytR3Rxta23N9qBG7mGZRv7djl+TCsWrPq0aBqLQsh4gs4bk38+TkaJV87doMcw5s1r+RRU01FEcUcliwCbJTi8nGLVz7EWe6NvTNOPtdkHbEkKQFauGEEfBdLvhOPW4zLKFl3duWAF/LhptT379YvhBZuGBFwsaxr0b84LkvxAYOioKXYpg2brjgtQMpYnI+Dms1rIos8anUUzoL+DS3WxT8+zGRZhEy36btdJlQdXxMUz+ORuaf6VD7frPIApwWg+0CavrcXWg6DLrk90slUoBKkP7Sw+xWm71mWVR1TF+QiPNJpWKtWia1azYMW9kjpO+FNYJaL1f5hyZVks7VuZ2tbh/WEELBuoc4Lv1b98qAzYwlLgRuK+rtROT5B8ocXQUzi3kxSZ5Zh95fdHcxMVHDRs1kEUTqaVtHR0YRKHW2mCHV0bcYCMiLlZXPuhDRe33gSsoQtt9t/UnqSjIiLIMlSlIYkSxM6Ultbhbdk40nYuxUBYCyf7HZ7C3isjtaSpEathb4YEvnwFgk6RVyQZZHd/j22NEnWiCsFY1DBJFmb0JDaGDcTBfH4GS1Q0+J6wVjKAo+iLBYUIBelomPKUG4sfLyFNtdQU7S+lJoqo9fTdPPXS1OomBpmwicLBYfRoDkiULHB1m9btz1H5ZgpXyxIoC2D2iVQu823bNm6sSbTbly9Hrtq7SjhlUVl0JLBsWaS1MfpYYKwjb+2XaM1pE7dbUY/hULRr34HV4sQ1wu8xiiCosuoCFXXrioipXnRFIJSxx5QONgN2Ah5OXAWQh9hoIgawTGqWR/fFo21BOsJyhDRzeHo2bF3Le71kg03UTSsBJWj6bQ5Le3zZA2shNYW7v1XUt8Iqvc0cq5dES5LertdJ6albe6Crl0L2VGh6Isk5aGgZE92GBEvE7ZdjVZP1dbpzClPJ068HabX6QxUcFlFg+49Giki20NJWUVZ4ASuHcS4dtUWFdyo4afTx8MIwkJTRFyDGd2J2B6RJZEEJmI9X9CzDmPBAC1968GYOwEoEYnm4j7rpK4WVf82o9u1S27d3UVzSNEIavIDI5KwJxJBi8DFUrhlu8QKLQcmzE82cS3dYLv16BBjeQWiA/s7IONIFZPjQ5Vqg9KQ2nZmLjaTGygUjTrAJIj6JVgDIWRcy+j4RINy9jRlhdTUkSGATfXe8OpvyEgatucMhBBzoiwJVSqhBW7qjioHuJr6yICqrc66iXBrhmFDkeXqGbgJbVPF0RUC/jV2jGzYqGFkrZKAGwUhYIdpPcKkVE5d8WTIkCGXbgwGDFVa9urVKzczXgljeyOqhBslw6phcKJSOWXpzbooy/zGfyQvh1qt1gqskjBRuKep3KjQKWMWoKmUhmSml8Y229CEhPj923ESPnvNzJopeeAfSaHE1KRwAIm/fKFp0zl9Kh8pibE4183cC7jOiluhyroGpXng6M4AUahYkyZQ0myfsw/WcoGDhDVTcuv4RFPTNqPqAIYKhZo0PVi52bFw3NcZG+7irkiVpJEjk6o4jsptTUjY0+wkpl1+gOfXiWrVnMfkrjh9esVK1oIhOAlGg0ddkIHGS/x8uUESvMZ/Cao4h9cSiQAn8O09ScyslP18pc6JpvGMiO/V7wP+efhSr3/NkUnczZKZ5wsCkcQ1kTirSMDznQBZYFahMIjPF0qySmWeGv0NMPASUGCOrEwAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Banking, Finance & Insurance</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Executive level interviews</h4>
                    </div>
                    <div class="idomain">
                        <amp-img class="idomain--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAAC91BMVEUAAADg9v/g9f/f8v/g9v/g9//f9P/f8v/g9v/g9f/f9f/h9//f8//g9v/h9//f9P/f9v/f8v/g9f/f9f/g9v/f9f/g9v/228L2xZ8wgNJ1WkdfUkP/0V8gZqQxgdTs7O3L6PofZaPf9f4sftIip+P33cT32sHu5rn4x6D53sUja6xzWEb////s7vDu6+QoqOP6y6QbY6NyV0Ti9f3j8vXS4+kufc334cj23sYYYKFuU0FZTT/J5fXn8O364si2wcMreMPt1rziyrLUqomViX6dgmyDaFR5X03i9frm8/jZ7fS62/Tr7vHX5uvq6+XO3eJFj9iet8Pu57+sq6cpa6f2xJzvwZuTlI//0Fl8Z1R7YlB2XUrW7vzL7fzy9vrc8fnb7/jq8fbX6vHk7OuOv+ru7Oju6d/o5t9dnt3n7tvw5tvK19pPrdjx49YqftY3hdUne9HAzND04M3u3MiXuMgtesiov8f03sW+xMX128JsmLwmcLYlbrLzza3Xw6zTvKb3yKHIspr23pmbnJafl4/Co4P52YGzlnmDgHemi3b71nSXfWn+02aHc2WReGOGblluZVhmWEhdUULZ8v32+fzd8/v8+/rO6/rJ5vji7fKs2PHx8O6mzOzp6ugyreNwq+Flo985q97f4N326NhTldjw6dP55dD75cx/tMynvMTj1MGuv8Hx2L/nz7e3ubdRirbu5bXyz7KusrDbyK9AfK8zc6ny4aj2y6b136Wip6QUXZ/oupbgupbWs5OwoJKOjoidkIO+noChiXSQgHN5dGmAa1lsUT5TSTzM5/X99vH19O7g5+uy2+tgvunC1uf47+a70OKbw+F+rd2mwtrW3tiTtdRgsNSTtNNlsdLFz9FvstFwstBdqtBzo8uOtsmHscU3fsGSrr9fkb25vLuAorooc7ry47lejrP40LHtya314Krnw6a0sKamop2ln5r03ZTEqZOYrpK9p5DcsY+rlH7z2Xi3lHjx2GyPdGFzbGGGcmD/z1VpXVCK0aVOAAAAFnRSTlMA3yAQ779gMK+QgH9Az59wcFDPUL+w3XAYmAAABaFJREFUWMOlmFWU00AUhpMaZVmKTzUNqcC226UUZxdYVnF3d3d3d3d3d3d3d3d3d+eBiXWmLS1l+z31zDn5+t97J3OSEP6RZkqnSkvKAAAyUq4MC5cS/014mrTAm7SpU/2PQooUXpAKSdAOGQiAShKKA5FG+s9+kMA/qK7AQVKD4EgdII4kLQgW0m93UpEgeMhUfiQy8D/IMqVM0qpS4v5K5UxAJNO/JHk37hs+vFpsPbRSf+3gGjpIrUruRZlPURK8Jw2rjddzHI4V/7nkoVo6nmIb/bcYl5T7oXczvCHvHazTRUYKmjLozvIceBqAZT+sx9gHWN5CyfekmrxnMLZvPHYswIjV6yfGxMRM5C3j88KlG7CccUvz903mLEdaATfhfuoB1fQxNQ4MGTZOH8NpYuFSok4XHadWWzcd5TSDsG0jxerBGT+xxrYITUROzbAJx6BlBwCmmrroTVa1Wl1kRC7WMgZ1BoTh80FMmRAzrL8GAkVVd+v1g2C7dTX72tQs8ZylGFaSTPrXKCX1E3ZrRHIe0VcDoEP0gPxqjm58mO7AJ4yU9LKMzem29B9ybBC0JBdQ81jjkqOLjYsULHgYBfDA9HtPhAZp2L7kHVtELdKjX1yn5DcAIz1nyehpKfwTRkElJb0GIAeycGUlrcwNEHKut8CTlknQghgyAIBFI9Q4ce/zFwcYEmhJ52Up+xWXRBxYCUCb+NW4pYe1o5AF9VfuZcndtwpu2dMIgDzLilgxS5ECZQHwKgl400iD0wlA9o6Kt7qTLBu1X9h1aErhPpY8fXBLMwCplCu5m2jJ/zk60QQ8CEdtQXTCJH24C8rVzHUwvyD5GFlL3C5o1ql9LTM2eEUBJRN10QetbFG2AUd1Y8TTDp0PSuBLHlGzDUo4Hul0udbE2Wyr14yK1K0FXmTBRoRrXkWw86m6UJxo/UO6XNb4fv3ibUmRiVN8HiawowXnRcIuTdWET43QcV6shk1tU1tte8fkBd6Qf7fkXlQ1ISFh1/MSaGkhrWbJlmNO7uAstS/0rJutiiZCM/XKnUKAo3jhKMHSlG6QJwiLafZie+UGU/toqpxzPCx4v3FteINWfNeUjhKy0KW3bm1RPLDFNLO8uRdTMK/jRJWljsmbGSaf8d43Q/WXUXQUf8bQNJ3DYBg9dD1mIj1nZCrV3KztwlA7zzscp+s66lamKLuxbdsPX6LgxW1YSQEasr26ATKyBbqRVAAxaZ5WqzVSFLXzkmOm5czkBgz8XdSobbv47CyabpkNWjrSdFSOgQaOkWKDsuB7d3pzM5QUZRiq4LUyrS2WDjNcFMX0Nmq15narltBNWUsb6BgNo3BUdO9dBSoHSljy9aKYdV07W25V6Oyi7F20HO0v002gJVtLusn2XwaBgYBHQaQCIqXaaXmMT6gtXe9arlfo6bJrjfya+eIsmh8RXXrJaMEyFPDAZweZaGls5h357AxVecVyS+sVz1wUU1RQtztJs0NqAi0VDZ4WGXbWmeYLSeywpa4KNy0LVm1mYF/yCSWdojtyIyr9tLpoGSmOCJ2708preeCkqYIVrlqcsVugr7dRsMwuUbhs2TklShRen11E6K4CWqRiW8xaATu0PGjtdHatzEURmAf8ISGEklBbuFlTBR8vcFo6MxTTyyhayvuTyAmWDIADtgWFcfWc67Qsd2FRtObafiwKViJOqbzRTVGKWjfX6bzNwK64MZf6u4QkeMIAS1aMQoWO16lTZ1qhQtOxxUkBoxBSGUg5JCGiCMGCvZ7IQ4iCkKS4JgmBkT6FkjDCA2WKJEok8Hm4C+FVS0KGJEGakCRIE5IEaUKQIKSq4KcjJfwTFpxDlp4IiCRjEJLMEuJfKMigvg+E5iHTSYkgyaD0V0s48T9IFUrvRDKVAsUIHkmGMJVcnpEk5UpVugyBOvoHVGkcHnG5mzsAAAAASUVORK5CYII="
                            width="69" height="69" alt="InterviewDomain"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13">Humanities</h4>
                    </div>
                    <div class="idomain--more">
                        <h4 class="heading--h4 weight--500 lineheight--13">And many more domain</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="section practice--section">
            <div class="sectionmask">
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="wrapper">
                <div class="practicei">
                    <div class="practicei--left">
                        <amp-img class="practicei--img" src="assets/images/9220aaf99f10cb059ea5.png" width="722"
                            height="444" alt="PractiveInterview"></amp-img>
                    </div>
                    <div class="practicei--right">
                        <amp-img class="practicei--geo"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAm8AAAIWCAMAAAA2xZqzAAAArlBMVEUAAACi8dei8def79Oh8Nafyu2f79ekw/ajw/Olw/ajwfai79alwfOf79aj8tf/qZ/6r6D5rqCmw/elw/alw/ajwvX5rqClw/alwvT4rZ+lw/X6rqClwvT3q5/5rqD3qZ+kw/ekxPX4rp+kwvT1rZ+h8dj6rqClwfWnw/ej8Nf5rqD5rqCi79b4rJ+i8dii8tih8Nf6r6Cf79af79Si79ai8tai89j5rqCi8delw/Y/w09eAAAAN3RSTlMA359AgBBA70DfIGAwIL8Qv4C/r3CA389gYKCfUEDvIL+QkHAw78+Qf8CvcFBQz6+Qj3AwcK+PWJ05vQAABmdJREFUeNrs3WtTEmEYgOFHjTiMoYKkeEgt06hm7DDN8v7/P5aChoVtprCw7HV9Yvh8zzzP+y7DBvyvby9GPgcUYG04sh4wTW+Umt7IoTdKTW/k0Bulpjdy6I1S0xs59Eb5bEy8H45cbUwEzNKrYZ61AL1RVnojh94oNb0ti5OdjxfbX09iteltSXzKxnZipeltOexkWSWCq72cWBuODCbffA8K0c8mjqMiPF9YmItsYjsqQm+LspXdtxXVoLdFOc7uO49q0NuinGdZBRc4vT2eeaq3Ett2XqAQ0wvcqj9i0NsSqMp9r96WRP91duNNPypDb4u01X97eNivylnB/yMBAAAAAAAAAAAAAAAAAAAAAAAAAABU1mZzNyhUu92+ioraraf9oFDVfWVv7SCl1Ahy6W1mszRd2wxy6W1ms/RGkE9vT1OrTc3Sa83gH/T2JN1U3+uc9Y4arfEsHTsNivJj7cbw2ujDl1hprXq60+z8+twNitIe3qrGO7n20wMug7/S27OcpWmue4uzXql5GlHbS79z/fY4zgvPWOEmXL89ht6ebl9vC1el3qZXuE6QT28zXeE+BLn09rwVzolhsQaDwcrfhNzTS39otgLmpZescBTnICUrHIXpJJe+FKeZpjVrAXOR7tT36lY45qyVbnVrEbXNxrte97RpojInjQd/F+JKhPk4Gi9sHptSiN5oljofUIxLv7GkQB2zlAJ1zVIA4Cd7cCAAAAAAAOT/2giqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqsKOHawmDAQBGJ5WbNSkPRglUjy0SKmn0mPm/V+s6sFQEOklSwPfd9oH+NndGQDg/3vp+z7gNr0xaXrjDr0xaXqjjOfZ2dept9lFwIge+18eAgZ6Y9L0Rkn149nHKbXL4TvgBvMp06U37tAbk6Y37tAbk/ZU13UAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAXxw3AcUsqyaglMzlPKCMJjPXAWXs8+QYUMQhz7r2/bBYBYzsNQeLgDHN1znYBoypWeZV5XZjXJsqrzq/N8a1y0FrB8fIVrtt21V5sQ8ooemMphS0qjLTc0opi8wqoJRtvgUU034GAAAAAMAP+3aPGiEUBAB4bqA2gogKi6Rwsdhq7n+zJEWKDbuPFM8Hge87wzC/DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPxFdz7mvu8f0xZwseVY80c/BVyoO/LJKMdxnX3M34aAa0yZKeBoZM8UcLSyjfnaElDdnG+MXUBlW35RUWlkzrfWgLq6/KaDo40zC24BVQ1Z0AdUdWTBGFBVnyUB4o1/a860EKGZWxZ8BFQ1ZcEcUFWXBWdAs4FhdbCntkU5pZnnBOeJgcvta752D6jv7lhPS4PdGwUtAm42m1JQ9wF11bt9sms/PWkEYQCHJ+p2/wBNa0UooQlKUntpL154v/8X66KImFQ8FNZlfJ7Lzn1+++5MshzV9+ud2r4abhzbj9svbXPXP29/qw0AAAAAAAAAAAAAAAAAAIAPqRiNRkWCblysVqtBgn/SGydNb+yhN06a3uhGcb521vZ28bByS+WYzlcvfUqwpTcOrJlPq/Q6vXFA1WW06l+pI6OztT9taZ8fVveJD+QqNuomvcX9lP9UxdZl2kdvHEAdz6ZpD71xuPH29oDTW/eaecrMMnaUaR+9dW1eLlJmxrErded+MBiMEq8r7iK+pcxMX8433l+znFdF+5hExF3KTBNbGb5NJ6mKtUkZrauUm8t4ViV64CbnHWnKeHKT6IVJPBmm7AzreDRL9MPjDMjze5pSM1sXt8hvdJ+ueWyUGQ64VtH46bFX6tiobQzHV0Y45dCVIiJyPsLRL8NozYbVdDxbjBMcVxVRmmt0ZRl1nhdTemk6di0FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAv+3XsQ3CMBBA0XMwNMjZIl0EEorQ7T8ZQhTxAnbDezP85gMAAAAAAAAAAAAAAAAAAAAAAMBsl3fJbb0HTFDzp7SA0Wqm4Jil5ekZMNaSnWvAUI/seAYGy14NGGrLzhEw1JqdW8BQrzyVgMGKXWCiVtwCE7Ulv7Y9YIa218Mq/K0PHn3sFzM/0GYAAAAASUVORK5CYII="
                            width="623" height="534" alt="geometry"></amp-img>
                        <h2 class="heading--display color--white">Practice Interviews Simplified!</h2>
                        <p class="practicei--p base--18 lineheight--12 color--white">Instead of trying to gauge
                            technical skill through puzzles and questions, watch them work through a real-life task in
                            your own environment. See how much they know with a shared workspace ??? even on the
                            candidate???s local machine ??? and talk through it on embedded video or chat.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section hdiw--section">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="label--heading">How does it works?</h2>
                    <p class="heading--para base--18">InterviewBuddy helps students and job seekers crack interviews &
                        land their dream jobs!</p>
                </div>
                <div class="hdiws">
                    <div class="line--horizontal"></div>
                    <div class="hdiw">
                        <div class="hdiw__step">
                            <div class="hdiw__step--circle">
                                <div class="hdiw__step--icircle">1</div>
                            </div>
                            <div class="hdiw__step--lb"></div>
                        </div>
                        <div class="hdiw__box">
                            <amp-img class="hdiw__box--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                                width="69" height="69" alt="HowDoesItWork"></amp-img>
                            <h4 class="heading--h4 weight--500 lineheight--13 textcenter hdiw__box--h4">Create an
                                Account</h4>
                            <p class="lineheight--14 hdiw__box--p textcenter">Sign up with your email; verify it &
                                you???re ready to get started on a life-changing journey. Login to start browsing our FREE
                                hand-picked Resources.</p>
                        </div>
                    </div>
                    <div class="hdiw">
                        <div class="hdiw__step">
                            <div class="hdiw__step--circle">
                                <div class="hdiw__step--icircle">2</div>
                            </div>
                            <div class="hdiw__step--lb"></div>
                        </div>
                        <div class="hdiw__box">
                            <amp-img class="hdiw__box--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                                width="69" height="69" alt="HowDoesItWork"></amp-img>
                            <h4 class="heading--h4 weight--500 lineheight--13 textcenter hdiw__box--h4">Compile Profile
                            </h4>
                            <p class="lineheight--14 hdiw__box--p textcenter">Complete your profile before scheduling an
                                interview so your personal expert(s) can thoroughly analyse your profile</p>
                        </div>
                    </div>
                    <div class="hdiw">
                        <div class="hdiw__step">
                            <div class="hdiw__step--circle">
                                <div class="hdiw__step--icircle">3</div>
                            </div>
                            <div class="hdiw__step--lb"></div>
                        </div>
                        <div class="hdiw__box">
                            <amp-img class="hdiw__box--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                                width="69" height="69" alt="HowDoesItWork"></amp-img>
                            <h4 class="heading--h4 weight--500 lineheight--13 textcenter hdiw__box--h4">Schedule a
                                One-On-One Interview</h4>
                            <p class="lineheight--14 hdiw__box--p textcenter">Choose an available slot that fits your
                                schedule & get a confirmation via e-mail & SMS. Prime your interview skills with our
                                curated Resources & you are all set to face your mock interview!</p>
                        </div>
                    </div>
                    <div class="hdiw">
                        <div class="hdiw__step no--arrow">
                            <div class="hdiw__step--circle">
                                <div class="hdiw__step--icircle">4</div>
                            </div>
                            <div class="hdiw__step--lb"></div>
                        </div>
                        <div class="hdiw__box">
                            <amp-img class="hdiw__box--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABFCAMAAAArU9sbAAABfVBMVEUAAADg9v/g9f/f8//g9f/f9P/g9//g9v/h9//g9v/f8//g9v/f9v/f8//h9v/g9v/f9P/f8v/f9v/g9v/h9v/f9f/g8f/h9//f9f/h9v/g9f/e8//h9f/b9v/j///g9v//0V/m6u3/b1j3tk3uzpDj8Pbk8evz35vsy8f6injm6OvtxsHj7/X7hHL/clrn5ef/eWT/z17+zFv4uU7/gW35vVH/+vn/vbP/hHH/0mT8yFn7xFb/5uL/4t3/3tj/0F77wFP//v7/9/b/9PP/7+zn6ev/2tP/08z/zMT/qJr/o5T/kYD/inf81XX/h3T/fWni8/b/6OTo6eHq59nr5NH/1tD/wrj/sKL22pH/mor/lob91Gz/dV/2uVbi8/r/8e/j7ej/6ubo4uLq4b7/x73/xbzv4bnx3a//uK3v2Kv/tKnt0qTw05P/no751YL0vmPn5tLr0tDt48fz3aT03Jz12prw05f1v5f414bwyH/7hHD9iGf/xF7/rl3/lVw1aTFhAAAAH3RSTlMA3yAQ72C/r3+QMM+AQJ9wcFDYv4pQNPCYd2NWTRwJRY36vAAAA0NJREFUWMOl2Odf2kAYwPHLIgwFbNXuJkJbO9MwBFTAxRbBvffWau3e7d/e+2jDU+5yIZjfC19+P/fchZOA2Am99wLubs9tT7c7cPd+74OHqO063T6luVs35DvedggBCKIbEm/bEBWL/LwTA3ILLfeDU1rHSdYL8Sj28lgsh/cpduOYu+OFaWwwXgYiKu0k9jhBoB4HCCRSQ/GcAl17iwFpJ1/zgbsV6LFVm8Rz0/TEKv/VZ9VLpblOYp7rKZxAzWNfgTrgfBwoogBLoZT3T6l2QTFZjMDRyvNnIaoXoJgsRlIcKUrgUvFZKJper2stFBfC8QpbmTxIj29lyzqhEPFYCTIVrTxRWFo5T25l4wwF9tfFVCqJJV2L66FaOqODYj6SwlJSO8lQJZdILOi13DGhkKfUyVTKE/XV8WRtdaaone7ohEJ8mIJMZTGr7RfX8RYn4tWxuJUSQB6mUiqEFhbxJNVEJT6WslI8SFaItg0lmV4/TeM1LI2tgDI7baLI5BFt7l0Yykpisj6TSe5PjBdKOWNfTr5v04qPuCqnv2xsGMp6pqClSjPZ8momXTHO6E344h2lcITyJDrQUEK13EIKP/76JP4DynB/a0VVh+YMJVTNThSTB5nxVEPJn0VVW4o6dZQ3Pkf6+WKxdFwNGcr88qBqT8G9nYebQdMaN0P+45qqmisuWsF9NhRI+zqlquaKC/lNFfXXnx+vmvr5O6KyFBl5TJR/Y72Gdo/whjAVD5IIBRr8NNt3Vf4DHsZCkZCXUqCpw0tnDp+MpeJFSKQUaHAZPzyH+GQsFdG460AhWjv5BgsBhbrrglZKZDQcG2qlSFgR2MrIUCyMG41aKzyCkWglOhC+KjY8QijEQLiuZgWGiYUbDQyxFQldJpIKDAONRhgKh67qoBQYBooNR0Chl4IEkVBGhsNmDURNFA4ZSaCQw5BjUYqEGrlAIYahx2pWOATxoqFEyGHosfqJZwUKGP8Dzh61bI/8OgbJynWSybc0J+8BEM85QoBxhADjCAHGAQIJfvunIyB2HfYMMYBwDl+pb/KoVRJn6/cBZw4XFJDNumTWLJ2onQRJJlck+iUBtR/f1eF3uXwc55L9wS6rHf0L2XH2VY6FASoAAAAASUVORK5CYII="
                                width="69" height="69" alt="HowDoesItWork"></amp-img>
                            <h4 class="heading--h4 weight--500 lineheight--13 textcenter hdiw__box--h4">Performance
                                Feedback</h4>
                            <p class="lineheight--14 hdiw__box--p textcenter">Get comprehensive feedback on your
                                performance & an interview scorecard underlining your strengths, personalized tips on
                                improving weaker areas & a link to the recording of your interview.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section ubp--section">
            <div class="wrapper--fluid">
                <div class="ubp--grid">
                    <div class="ubp__txt">
                        <p class="ubp__txt--p base--20 color--white fontweight--regular">Used by professionals at
                            companies and universities we respect and admire.</p><a
                            class="btn--primary btn--grad-orange br--lg" href="">Book your Interview</a>
                    </div>
                    <div class="ubp__logos">
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTg0REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTg1REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzI4RjZBODJEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzI4RjZBODNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7kx7QmAAAJIklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTgwREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTgxREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzI4RjZBN0VEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzI4RjZBN0ZEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4t9uvXAAAGwElEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTdDREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTdEREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RUJEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RUNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5QxLQUAAAF+0lEQVR42uyc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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVFMjA0NkU5REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVFMjA0NkVBREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RTdEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RThEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lXIyRAAAKlklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVFMjA0NkU1REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVFMjA0NkU2REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RTNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RTREQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4r8G6JAAAJIklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTg0REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTg1REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzI4RjZBODJEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzI4RjZBODNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7kx7QmAAAJIklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTgwREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTgxREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzI4RjZBN0VEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzI4RjZBN0ZEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4t9uvXAAAGwElEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcyOEY2QTdDREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcyOEY2QTdEREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RUJEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RUNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5QxLQUAAAF+0lEQVR42uyc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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVFMjA0NkU5REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVFMjA0NkVBREIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RTdEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RThEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lXIyRAAAKlklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                        <div class="ubp__logo">
                            <amp-img class="ubp__logo--img"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJMAAAA8CAYAAABir4guAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVFMjA0NkU1REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVFMjA0NkU2REIxMjExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NUUyMDQ2RTNEQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NUUyMDQ2RTREQjEyMTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4r8G6JAAAJIklEQVR42uxd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"
                                width="147" height="60" alt="Professional"></amp-img>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section benefits--section bggradwhite--bt">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="normal--heading">Benefits with InterviewBuddy</h2>
                    <p class="heading--para base--18">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry the new standard</p>
                </div>
                <div class="benefits">
                    <div class="benefit">
                        <amp-img class="benefit--img"
                            src="data:image/png;base64,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"
                            width="120" height="120" alt="Benefit"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13 textcenter benefit--h4">Lorem Ipsum is simply
                            dummy text</h4>
                        <p class="lineheight--14 benefit--p textcenter">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                    <div class="benefit">
                        <amp-img class="benefit--img"
                            src="data:image/png;base64,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"
                            width="120" height="120" alt="Benefit"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13 textcenter benefit--h4">Lorem Ipsum is simply
                            dummy text</h4>
                        <p class="lineheight--14 benefit--p textcenter">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                    <div class="benefit">
                        <amp-img class="benefit--img"
                            src="data:image/png;base64,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"
                            width="120" height="120" alt="Benefit"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13 textcenter benefit--h4">Lorem Ipsum is simply
                            dummy text</h4>
                        <p class="lineheight--14 benefit--p textcenter">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                    <div class="benefit">
                        <amp-img class="benefit--img"
                            src="data:image/png;base64,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"
                            width="120" height="120" alt="Benefit"></amp-img>
                        <h4 class="heading--h4 weight--500 lineheight--13 textcenter benefit--h4">Lorem Ipsum is simply
                            dummy text</h4>
                        <p class="lineheight--14 benefit--p textcenter">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pricing--section bggradwhite--tb">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="normal--heading">Pricing</h2>
                    <p class="heading--para base--18">InterviewBuddy helps students and job seekers crack interviews &
                        land their dream jobs!</p>
                </div>
                <div class="pricings">
                    <div class="pricing"><small class="pricing--label pricing--label-green">LIMITED OFFER</small>
                        <amp-img class="pricing--img" src="assets/images/a3768d3eb94cfe9b3fd7.png" width="132"
                            height="132" alt="Pricing"></amp-img><span class="pricing--exp">Experience range : 0-2
                            years</span><span class="pricing--duration">Duration : 30 minutes</span>
                        <h3 class="heading--h3 pricing--price">??? 1099/-</h3>
                        <div class="pricing__pm">
                            <div class="pricing__pm--control" id="pricingminus">
                                <div class="pricing__pm--control-i"><svg width="15" height="3" viewBox="0 0 15 3"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.5" x2="15" y2="1.5" stroke="" stroke-width="3"></line>
                                    </svg></div>
                            </div>
                            <div class="pricing__pm--qty"><input class="pricing__pm--qty-input" type="text" name="qty"
                                    placeholder="1 Interview"></div>
                            <div class="pricing__pm--control" id="pricingplus">
                                <div class="pricing__pm--control-i"><svg width="17" height="15" viewBox="0 0 17 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1.31134e-07" y1="7.5" x2="17" y2="7.5" stroke="" stroke-width="3">
                                        </line>
                                        <line x1="8.5" y1="-6.55671e-08" x2="8.5" y2="15" stroke="" stroke-width="3">
                                        </line>
                                    </svg></div>
                            </div>
                        </div><button class="btn--other btn--grad-other br--lg pricing--btn" type="button">Sign
                            Up</button>
                    </div>
                    <div class="pricing"><small class="pricing--label pricing--label-green">LIMITED OFFER</small>
                        <amp-img class="pricing--img" src="assets/images/27da1bffc0867a8b7ce9.png" width="132"
                            height="132" alt="Pricing"></amp-img><span class="pricing--exp">Experience range : 2-5
                            years</span><span class="pricing--duration">Duration : 30 minutes</span>
                        <h3 class="heading--h3 pricing--price">??? 1899/-</h3>
                        <div class="pricing__pm">
                            <div class="pricing__pm--control" id="pricingminus">
                                <div class="pricing__pm--control-i"><svg width="15" height="3" viewBox="0 0 15 3"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.5" x2="15" y2="1.5" stroke="" stroke-width="3"></line>
                                    </svg></div>
                            </div>
                            <div class="pricing__pm--qty"><input class="pricing__pm--qty-input" type="text" name="qty"
                                    placeholder="1 Interview"></div>
                            <div class="pricing__pm--control" id="pricingplus">
                                <div class="pricing__pm--control-i"><svg width="17" height="15" viewBox="0 0 17 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1.31134e-07" y1="7.5" x2="17" y2="7.5" stroke="" stroke-width="3">
                                        </line>
                                        <line x1="8.5" y1="-6.55671e-08" x2="8.5" y2="15" stroke="" stroke-width="3">
                                        </line>
                                    </svg></div>
                            </div>
                        </div><button class="btn--other btn--grad-other br--lg pricing--btn" type="button">Sign
                            Up</button>
                    </div>
                    <div class="pricing"><small class="pricing--label pricing--label-green">LIMITED OFFER</small>
                        <amp-img class="pricing--img" src="assets/images/c9d041cc04e3685863a9.png" width="132"
                            height="132" alt="Pricing"></amp-img><span class="pricing--exp">Experience range : 5-10
                            years</span><span class="pricing--duration">Duration : 30 minutes</span>
                        <h3 class="heading--h3 pricing--price">??? 2899/-</h3>
                        <div class="pricing__pm">
                            <div class="pricing__pm--control" id="pricingminus">
                                <div class="pricing__pm--control-i"><svg width="15" height="3" viewBox="0 0 15 3"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.5" x2="15" y2="1.5" stroke="" stroke-width="3"></line>
                                    </svg></div>
                            </div>
                            <div class="pricing__pm--qty"><input class="pricing__pm--qty-input" type="text" name="qty"
                                    placeholder="1 Interview"></div>
                            <div class="pricing__pm--control" id="pricingplus">
                                <div class="pricing__pm--control-i"><svg width="17" height="15" viewBox="0 0 17 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1.31134e-07" y1="7.5" x2="17" y2="7.5" stroke="" stroke-width="3">
                                        </line>
                                        <line x1="8.5" y1="-6.55671e-08" x2="8.5" y2="15" stroke="" stroke-width="3">
                                        </line>
                                    </svg></div>
                            </div>
                        </div><button class="btn--other btn--grad-other br--lg pricing--btn" type="button">Sign
                            Up</button>
                    </div>
                    <div class="pricing"><small class="pricing--label pricing--label-green">LIMITED OFFER</small>
                        <amp-img class="pricing--img" src="assets/images/8cdfbc0109f0b7e796ae.png" width="132"
                            height="132" alt="Pricing"></amp-img><span class="pricing--exp">Experience range : 10-15
                            years</span><span class="pricing--duration">Duration : 30 minutes</span>
                        <h3 class="heading--h3 pricing--price">??? 3899/-</h3>
                        <div class="pricing__pm">
                            <div class="pricing__pm--control" id="pricingminus">
                                <div class="pricing__pm--control-i"><svg width="15" height="3" viewBox="0 0 15 3"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.5" x2="15" y2="1.5" stroke="" stroke-width="3"></line>
                                    </svg></div>
                            </div>
                            <div class="pricing__pm--qty"><input class="pricing__pm--qty-input" type="text" name="qty"
                                    placeholder="1 Interview"></div>
                            <div class="pricing__pm--control" id="pricingplus">
                                <div class="pricing__pm--control-i"><svg width="17" height="15" viewBox="0 0 17 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1.31134e-07" y1="7.5" x2="17" y2="7.5" stroke="" stroke-width="3">
                                        </line>
                                        <line x1="8.5" y1="-6.55671e-08" x2="8.5" y2="15" stroke="" stroke-width="3">
                                        </line>
                                    </svg></div>
                            </div>
                        </div><button class="btn--other btn--grad-other br--lg pricing--btn" type="button">Sign
                            Up</button>
                    </div>
                </div>
                <div class="interviews">
                    <div class="interview interview--special">
                        <h4 class="heading--h4 weight--500">For professionals with 15+ years of industry experience.
                        </h4>
                        <p class="interview--p">Experience range : 0-2 years | Duration : 30 mins</p><a
                            class="btn--primary btn--grad-orange-v br--lg" href=""><span>Specialized
                                Interviews</span><svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 1.5L11.5 11L2 20.5" stroke="white" stroke-width="3"></path>
                            </svg></a>
                        <amp-img class="interview--img"
                            src="data:image/png;base64,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"
                            width="103" height="103" alt="interview"></amp-img>
                    </div>
                    <div class="interview interview--async">
                        <h4 class="heading--h4 weight--500">One mock interview costs only $1, cheaper than your morning
                            Latte!</h4>
                        <p class="interview--p">Experience range : 0-2 years | Duration : 30 mins</p><a
                            class="btn--secondary btn--grad-green-v br--lg" href="asyninterviews"><span>Async
                                Interviews</span><svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 1.5L11.5 11L2 20.5" stroke="white" stroke-width="3"></path>
                            </svg></a>
                        <amp-img class="interview--img"
                            src="data:image/png;base64,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"
                            width="103" height="103" alt="interview"></amp-img>
                    </div>
                </div>
            </div>
        </section>
        <section class="section oppurtunity--section">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="label--heading">Lorem Ipsum Dolor Emit</h2>
                    <p class="heading--para heading--para-white base--18">InterviewBuddy helps students and job seekers
                        crack interviews & land their dream jobs!</p>
                </div>
                <div class="oppurtunitys">
                    <amp-img class="oppurtunitys--bg"
                        src="data:image/png;base64,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"
                        width="846" height="627" alt="Geo"></amp-img>
                    <div class="oppurtunity">
                        <amp-img class="oppurtunity--img" src="assets/images/a17dcc7f4f168a0af011.png" width="222"
                            height="222" alt="Business"></amp-img>
                        <h4 class="heading--h4 oppurtunity--h4">Lorem Ipsum Dolor Emit</h4><a
                            class="btn--primary btn--grad-orange br--xl" href="">Businesses</a>
                    </div>
                    <div class="oppurtunity">
                        <amp-img class="oppurtunity--img" src="assets/images/3916feed898f059efa23.png" width="222"
                            height="222" alt="University"></amp-img>
                        <h4 class="heading--h4 oppurtunity--h4">Lorem Ipsum Dolor Emit</h4><a
                            class="btn--secondary btn--grad-green br--xl" href="">Universities</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section members--section">
            <div class="wrapper--fluid">
                <div class="members--grid">
                    <div class="members__txt">
                        <h3 class="heading--h3">Meet the members</h3>
                        <p class="base--18">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.</p><a class="btn--secondary btn--grad-green br--lg" href="">Book your
                            Interview</a>
                    </div>
                    <div class="members">
                        <div class="members__btns"><button class="member__arrow--next" type="button"><svg width="10"
                                    height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.6 0.800049L1.4 8.60005L8.6 16.4001" stroke="" stroke-width="2"></path>
                                </svg></button><button class="member__arrow--prev" type="button"><svg width="10"
                                    height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.6 0.800049L1.4 8.60005L8.6 16.4001" stroke="" stroke-width="2"></path>
                                </svg></button></div>
                        <div class="members__cards">
                            <div class="member" data-pos="-2">
                                <div class="member--data">
                                    <amp-img class="member--img" src="assets/images/9aa1b8bc51e32f63ae3f.png"
                                        width="110" height="110" alt="member"></amp-img>
                                    <h3 class="member--name">Subhankar</h3>
                                    <p class="member--pos">Chief People Officer at Zoom, Head of Human Resources at ABP
                                        News, Chief Manager - HR at Muthoot Fincorp</p>
                                </div>
                            </div>
                            <div class="member" data-pos="-1">
                                <div class="member--data">
                                    <amp-img class="member--img" src="assets/images/1bd54331474980e05a42.png"
                                        width="110" height="110" alt="member"></amp-img>
                                    <h3 class="member--name">Dr. Sekhar</h3>
                                    <p class="member--pos">Chief People Officer at Zoom, Head of Human Resources at ABP
                                        News, Chief Manager - HR at Muthoot Fincorp</p>
                                </div>
                            </div>
                            <div class="member" data-pos="0">
                                <div class="member--data">
                                    <amp-img class="member--img" src="assets/images/093c2fa0457c26ccc0a2.png"
                                        width="110" height="110" alt="member"></amp-img>
                                    <h3 class="member--name">Member Name</h3>
                                    <p class="member--pos">Principal Software Engineer/Architect, Research Staff Member
                                    </p>
                                </div>
                            </div>
                            <div class="member" data-pos="1">
                                <div class="member--data">
                                    <amp-img class="member--img" src="assets/images/9aa1b8bc51e32f63ae3f.png"
                                        width="110" height="110" alt="member"></amp-img>
                                    <h3 class="member--name">Subhankar</h3>
                                    <p class="member--pos">Chief People Officer at Zoom, Head of Human Resources at ABP
                                        News, Chief Manager - HR at Muthoot Fincorp</p>
                                </div>
                            </div>
                            <div class="member" data-pos="2">
                                <div class="member--data">
                                    <amp-img class="member--img" src="assets/images/1bd54331474980e05a42.png"
                                        width="110" height="110" alt="member"></amp-img>
                                    <h3 class="member--name">Dr. Sekhar</h3>
                                    <p class="member--pos">Chief People Officer at Zoom, Head of Human Resources at ABP
                                        News, Chief Manager - HR at Muthoot Fincorp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section platform--section">
            <div class="sectionmask2">
                <div class="triangle"></div>
                <div class="triangle"></div>
            </div>
            <div class="wrapper">
                <div class="platformi">
                    <div class="platformi--left">
                        <amp-img class="platformi--fimg"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAzoAAAJdCAMAAADN6fLQAAAARVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////9SnXPCAAAAF3RSTlMAgHC/QGAgEDAIUDh4SJwYWChot46tex51GdEAAAe8SURBVHja7N2BjqIwFEbh/l2KFIqAO7vv/6i7YYhRM85U7GSEe74nMCYn9tJKHTaj7r10aicHIF/stTgdHIBM8aQzTztArlYXfHQAcky6UjkAOYKuJH52gCy6UTsAXxt0o3MAvlZLDDvA4w660TgAGZKuDQ5Ahl5XvAOQ45BYrwFrdLrQOgCZKp0FNkSBfI3XLLGnAzym7sexb/jJAQAAAAAAAAAAAAAAAAAAAAAAAAAAAACrhnrBjV3AIwIv4gZIB7iHdIDXQDoldbzmzw7SKScGjQ5WkE4xtedbtIR0Sum4RcMW0ikjBm54NoZ0iqg9FwZaQzpFL6HhOgA7SOdh0+2hpUPQIjmYQTqPikmSD2PV1MN5sbYIDmaQzlPXa6YwjjpjW2ffpubS3+MiNJc4R/2JVvf0DjsWdOnPr8WRW75zRa87OIeza6TztCHpY5PDjpFO2XFnwY7o/pFO+XGHbR0TSOf7xh2HPSOdEobEgs0c0vm+cSfxUH/PSKf8uMNxAhNIp4zo2RQ1jYM4qw08nzaNdFaLYtyxbGPpVC+0mhwkxh3DSGe1mjOgppHOap04jmMZ6Tz1WRh37CKd1UZJjDt2kU6JDTLfdP14Sow7lpDOal5ahOhmcai7agxeYsm2f1tJp/ezt9//vflZ537WJ/8NpRwDtpJOq9lxPjP0Ep/4oHeeB2o2kc6T2zqBv7cZRTprTbzIw7bW+9eYHDY361Qs1vCPvTs2ARgGgiCIAmMcGKT+m5UaUH4HMz0sPJd8kaCF7R9jOtZoEZTO41ijSFA6y0MQigSlA02kA9KBK+lAhu89TMIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGz24EAAAAAAAMj/tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVYWde8ltEIbCMOrrBmgClJC2+99qSVqpoD5iZ8TgnD18A/+6MgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECRqUtAvSYfE1AtxykB1SKiT0ClKRZtAurMscimAqjUx9VFO1BnjE9DM/bzlIAyTWyIB0ocT7FxSMB9XY61wdIGJeYhvtgKoNwhNkYHOVA7EDgpgGJjc4lvOQHFprYfh7hqElCljasxAXUOnjrwkHNEzAmodMwucOAR3RAJqPdsYAMAAACAf3UR4bNCkA78SjqwD9IB6cCfpAP7IB2o0+ab4XXxkm8UBPe1cfP2tHgP/xCAdGBFOrAP08+3zjkBFjZYkQ7sg3RAOnywd4dEAAAwDAPh/DveDIz2Cv49BIeXdKCDdEA6EDTHtw0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgGXHDnIQBIIgAM4QlxWQaPj/YzUePAgLcvNQ9YdOuhsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP5JP42PUso83QP4UT/f8qMbawDH+pJfhAcODXOu3aYA9tQlN80BtNUuG5YhgHZymh4BNCz5prPBKZfc1Qewoea+LoANYx64BrBS88gSwMo1X6wdOKvkm5MNThkyNbYne3eA0yAQBFB0Z6VYKLXUeP+zSogai9jSRmk3ee8M/CxMJgtcr44FrBTA1DYWsEINU1WEOQFIB+ZJBx7DLhZwUwFMHU3Y4OY9HAugcLUcF7UJmNrHRccETNXe1+B/9j+rBFx/7GRrODCrj7PcYwjzmhxnbBIw79B5XYNbbJUDN547yoG/uzu3t7wGl1Q5JrItAljgeXcSz8bNhbBUXW1yRHS53/nIAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgzrEd+NkVXKuKQZ0A6cBP0oHHIB2QDvxKOnBnx2qUXwZ9NTok4JI2Ri9Pg7cYbRMgHR5W06SCSYf7qPc5IjblPm3S4R6afXzIpe5/HepR/zbY1aOiT1GK0LzGl67suZThNGvaxzddqeeOdFhbHSfaVDDpsKI2TpX8jSAdVtTFp/InU9JhPc8xUaVySYffSeedvXvLbRAGogDqsXAcAqhJ9r/Ypq3UPD4qQ1TaoHP2MDK+WHN/sOsuXjro4HX08WBIQIMcV753oFkXd3ICWvTjZgI2WNUpbhwT0Ggf38or/xCFtdUSn0bpGsxTh+nQeacPAAAAAAAAAAAAAAAAAAAAAPyB3XTOuQxWwsMctWyhDwLWVvNGiiNhVX2OG1MCmkzaVGCBftxQ1zes5xT3xgQ06OKBhBqMDvyaIR4ohoAWu9C6CktI2GCRzlUHFjnHhVdsMFfNJgeW6Kf4Mp4SMEPdH0s5nOTSAAAAAAAAAAAAAAAAAPBv1LxPwFzDGEYH5uondSnQ7K3e7Qh6S0CLc0Quh27fjfEhAU12iobg+R3CJQGNSlwdE9CoZqcOPHvdGRLQatKDD88eO9kO7vf27u0GQBiEAqiY+EwbTfcf1nSD0l/PmQIuEGDUKWSDyXxauwN5d3StvluxjAPJyU69lu7ZT90OjFkjimsDSItofnhD2hFVjQYT5AIAAAAAwB989WQsmSE+3TQAAAAASUVORK5CYII="
                            width="826" height="605" alt="geometry"></amp-img>
                        <h2 class="heading--display">Flexible and Robust Platform</h2>
                        <p class="platformi--p base--18 lineheight--12">All our subscribed users, past and present, will
                            be able to ask our experts questions and get doubts clarified with the in-app chat in the
                            Android app.</p>
                    </div>
                    <div class="platformi--right">
                        <amp-img class="platformi--img" src="assets/images/230563d487758db3e763.png" width="768"
                            height="544" alt="PractiveInterview"></amp-img>
                    </div>
                </div>
            </div>
        </section>
        <section class="section press--section">
            <div class="wrapper">
                <div class="heading--box textcenter">
                    <h2 class="normal--heading">Press</h2>
                    <p class="heading--para base--18">InterviewBuddy helps students and job seekers crack interviews &
                        land their dream jobs!</p>
                </div>
                <div class="presss">
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/292d733d141b1f413be0.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/e70e4bc9234b927a3942.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/668b48ae29054789847c.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/bcc2d3b02797e66e789f.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASUAAABuCAYAAABhjwVsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI5QkRGRjY0REIxOTExRUI5QTEwQTc3MDA0Mjg3QzhDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI5QkRGRjY1REIxOTExRUI5QTEwQTc3MDA0Mjg3QzhDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTE5MzhBMUJEQjE5MTFFQjlBMTBBNzcwMDQyODdDOEMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTE5MzhBMUNEQjE5MTFFQjlBMTBBNzcwMDQyODdDOEMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz749e7tAAAPwklEQVR42uyd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"
                            width="293" height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/03f3ac55d97ffc288e24.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/92bab9b58fdc9c32db07.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/f918211af5d6e8108204.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/292d733d141b1f413be0.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/e70e4bc9234b927a3942.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/668b48ae29054789847c.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                    <div class="press">
                        <amp-img class="press--img" src="assets/images/bcc2d3b02797e66e789f.png" width="293"
                            height="110" alt="press"></amp-img>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="wrapper">
                <div class="footer__nav">
                    <div class="nav__about">
                        <amp-img class="nav__about--logo"
                            src="data:image/png;base64,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"
                            width="173" height="67" alt="InterviewBuddy"></amp-img>
                        <p class="nav__about--desc color--white">Online face-to-face mock interviews with experts help
                            you train & prepare for job interviews in a no pressure, stress-free environment simulating
                            a real job interview. Stay ahead of the competition with expert mentoring & feedback!</p>
                        <ul class="social">
                            <li class="social--li"><a class="social--a" href="" target="_blank"> <i
                                        class="social--i flaticon-facebook"></i></a></li>
                            <li class="social--li"><a class="social--a" href="" target="_blank"> <i
                                        class="social--i flaticon-twitter"></i></a></li>
                            <li class="social--li"><a class="social--a" href="" target="_blank"> <i
                                        class="social--i flaticon-instagram"></i></a></li>
                            <li class="social--li"><a class="social--a" href="" target="_blank"> <i
                                        class="social--i flaticon-linkedin"></i></a></li>
                            <li class="social--li"><a class="social--a" href="" target="_blank"> <i
                                        class="social--i flaticon-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="nav__links">
                        <h4 class="nav__links--head">Quick Links</h4>
                        <ul class="fnav">
                            <li class="fnav--li"><a class="fnav--a" href="">Features</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Careers</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Offers</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Campus Ambassador</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="universities">Universities</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="business">Businesses</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Blog</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">FAQs</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Help</a></li>
                        </ul>
                    </div>
                    <div class="nav__links">
                        <h4 class="nav__links--head">Services</h4>
                        <ul class="fnav">
                            <li class="fnav--li"><a class="fnav--a" href="">No Software Downloads</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Interview Scorecard</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Playback Your Interview</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Curated Resources</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Advanced Video Technology</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Affordable</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Save Time</a></li>
                            <li class="fnav--li"><a class="fnav--a" href="">Device Friendly</a></li>
                        </ul>
                    </div>
                    <div class="nav__links">
                        <h4 class="nav__links--head">Contact Infos</h4>
                        <div class="cbox">
                            <h3 class="cbox--head">Phone</h3><a class="cbox--val" href="tel:+918500990101">+91 8500 99
                                0101</a>
                        </div>
                        <div class="cbox">
                            <h3 class="cbox--head">Email Address</h3><a class="cbox--val"
                                href="mailto:hello@interviewbuddy.in">hello@interviewbuddy.in</a>
                        </div>
                        <div class="cbox">
                            <h3 class="cbox--head">Office hours</h3>
                            <p class="cbox--label">Timings: 1 PM to 9 PM<br>(Tuesday to Sunday)</p>
                        </div>
                    </div>
                    <div class="nav__subsc">
                        <h4 class="nav__subsc--h4">Interview Tips in your Inbox</h4>
                        <p class="nav__subsc--p">Handcrafted & curated material for every stage of career grooming &
                            industry insights, delivered to your inbox once a month. No spam. Period.</p>
                        <form class="subform" id="subscribeForm" action="/app/forms/subscribe.php" target="_blank"
                            autocomplete="off"><input class="form--input subform--input" type="text" name="email"
                                placeholder="Enter Your Email"><button
                                class="subform--btn btn--primary btn--grad-orange-rev btn--full br--lg"
                                id="subscribeFormSubmit" type="submit">Subscribe</button></form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="wrapper">
                    <div class="copy">
                        <p class="copy--p">&copy; <?php echo date(
    'Y'
); ?> InterviewBuddyTM | InterviewBuddy is a trademark of U&U Connoisseurs India Private Limited</p>
                        <ul class="copyul">
                            <li class="copyul--li"><a class="copyul--a" href="">Privacy Policy</a></li>
                            <li class="copyul--li"><a class="copyul--a" href="">T&amp;C</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="crafted">
                <div class="wrapper">
                    <div class="craft textcenter">
                        <p class="craft--p">CAREFULLY CRAFTED WITH &hearts; ON THE EAST COAST OF INDIA FOR STUDENTS &
                            JOB SEEKERS</p>
                    </div>
                </div>
            </div>
        </footer>
    </amp-script>
</body>

</html>