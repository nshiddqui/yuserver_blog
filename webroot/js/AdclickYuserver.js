class AdclickYuserver {

    #token;
    #link;
    #id;
    #adsClick;
    #searchParams;

    constructor() {
        this.#setupQueryParams();
        this.#setupYuserverClickData();
        if (this.#checkRequestRequired()) {
            this.#setupEventListener();
            this.#startIntervalIframe();
        }
    }

    #setupQueryParams() {
        this.#searchParams = new URLSearchParams(window.location.search);
    }
    #setupYuserverClickData() {
        this.#token = this.#searchParams.get('token');
        this.#link = this.#searchParams.get('link');
        this.#id = this.#searchParams.get('id');
        this.#adsClick = false;
    }

    #checkRequestRequired() {
        if (this.#token) {
            if (this.#link) {
                if (this.#id) {
                    console.log('You have access as a Employee');
                    return true;
                }
            }
        }
        return false;
    }

    async #checkIsAdsClcik() {
        var elem = document.activeElement;
        if (elem && elem.tagName == 'IFRAME') {
            if (this.#adsClick) {
                console.log('AdclickYuserver clicked');
                this.#callAjaxConfirmation();
            } else {
                await this.#sleep(100);
                this.#checkIsAdsClcik();
            }
        } else {
            await this.#sleep(100);
            this.#checkIsAdsClcik();
        }
    }

    #sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    #UserClick(bool) {
        this.#adsClick = bool;
    }

    #startIntervalIframe() {
        this.#checkIsAdsClcik();
    }

    #setupEventListener() {
        document.addEventListener("beforeunload", event => {
            this.#UserClick(true);
        });
        document.addEventListener("visibilitychange", event => {
            if (document.visibilityState == "visible") {
                this.#UserClick(false);
            } else {
                this.#UserClick(true);
            }
        });
    }

    #callAjaxConfirmation() {
        var xhr = new XMLHttpRequest();
        var url = "https://yuserver.in/api/v1/click-events/add-user-click";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var json = JSON.parse(xhr.responseText);
                console.log(json);
            }
        };
        var data = JSON.stringify({
            token: this.#token,
            link: this.#link,
            id: this.#id
        });
        xhr.send(data);
    }
}
new AdclickYuserver();