<style>
     body { background-color: #fffde7;}
        #wrap {width: 1200px; margin: 0 auto;}
        header {width: 100%; height: 100px; background-color: #ffe082;}
        article {width: 100%; height: 300px; background-color: #ffd54f;}
        section {overflow: hidden; padding: 5%; width: 90%;background-color: #ffca28;}
        section > div {width: 18%; margin: 1%; height: 170px; background-color: #ff9800; float: left; border-radius: 5px;}
        footer {width: 100%; height: 100px; background-color: #ffb300}

        /* 화면 너비 0 ~ 1200px */
        @media (max-width: 1220px){
            #wrap {width: 100%;}
            section > div {width: 23%;}
            section > div:nth-child(5n) {display: none;}
        }

        /* 화면 너비 0 ~ 768px */
        @media (max-width: 768px){
            section > div {width: 31.3333%;}
            section > div:nth-child(5) {display: block;}
        }

            /* 화면 너비 0 ~ 480px */
        @media (max-width: 480px){
            section > div {width: 48%;}
            section > div:nth-child(5n) {display: block;}
        }
</style>
<div id="wrap">
    <header></header>
    <article></article>
    <section>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>
    <footer></footer>
</div>


