const { createApp } = Vue;

createApp({
    data() {
        return {
            myArr: [
                [
                    "New Jersey",
                    "Bon Jovi",
                    "1988"
                ],
                [
                    "Live at Wembley 86",
                    "Queen",
                    "1992"
                ],
                [
                    "Ten's Summoner's Tales",
                    "Sting",
                    "1993"
                ],
            ]
        }
    },
    methods: {
    },
    created() {
    }
}).mount('#app');