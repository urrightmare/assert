@charset "UTF-8";

/********* public:notices.less ********/
.notices {
  list-style: none;
  margin: 0;
  padding: 0;
}
.notices.notices--block .notice {
  margin-bottom: 10px;
}
.notices.notices--floating {
  margin: 0 20px 0 auto;
  width: 300px;
  max-width: 100%;
  z-index: 800;
}
@media (max-width: 340px) {
  .notices.notices--floating {
    margin-right: 10px;
  }
}
.notices.notices--floating .notice {
  margin-bottom: 20px;
}
.notices.notices--scrolling {
  display: flex;
  align-items: stretch;
  overflow: hidden;
  border-width: 1px;
  border-style: solid;
  border-top-color: #2e2d2d;
  border-right-color: #2e2d2d;
  border-bottom-color: #2e2d2d;
  border-left-color: #2e2d2d;
  margin-bottom: 10px;
}
.notices.notices--scrolling.notices--isMulti {
  margin-bottom: 30px;
}
.notices.notices--scrolling .notice {
  width: 100%;
  flex-grow: 0;
  flex-shrink: 0;
  border: none;
}
.noticeScrollContainer {
  margin-bottom: 10px;
}
.noticeScrollContainer .lSSlideWrapper {
  border-width: 1px;
  border-style: solid;
  border-top-color: #2e2d2d;
  border-right-color: #2e2d2d;
  border-bottom-color: #2e2d2d;
  border-left-color: #2e2d2d;
}
.noticeScrollContainer .notices.notices--scrolling {
  border: none;
  margin-bottom: 0;
}
.notice {
  position: relative;
  border-width: 1px;
  border-style: solid;
  border-top-color: #2e2d2d;
  border-right-color: #2e2d2d;
  border-bottom-color: #2e2d2d;
  border-left-color: #2e2d2d;
}
.notice:before,
.notice:after {
  content: " ";
  display: table;
}
.notice:after {
  clear: both;
}
.notice.notice--primary {
  color: #c4c2c2;
  background: #1f1e1e;
}
.notice.notice--accent {
  color: #c4c2c2;
  background: #3b3b3b;
}
.notice.notice--accent a:not(.button--notice) {
  color: #c4c2c2;
}
.notice.notice--dark {
  color: #fefefe;
  border: none;
  background: #141414;
}
.notice.notice--dark a:not(.button--notice) {
  color: #b4b4b4;
}
.notice.notice--light {
  color: #141414;
  background: #fefefe;
}
.notice.notice--light a:not(.button--notice) {
  color: #828282;
}
.notice.notice--enablePush {
  display: none;
}
@media (max-width: 900px) {
  .notice.notice--enablePush {
    padding: 3px 3px 10px;
    font-size: 13px;
  }
}
@media (max-width: 900px) {
  .notice.notice--cookie .notice-content {
    padding: 3px 3px 10px;
    font-size: 12px;
  }
  .notice.notice--cookie .notice-content .button--notice {
    font-size: 12px;
    padding: 3px 6px;
  }
  .notice.notice--cookie .notice-content .button--notice .button-text {
    font-size: 12px;
  }
}
.notices--block .notice {
  font-size: 15px;
  border-radius: 4px;
}
.notices--floating .notice {
  font-size: 11px;
  border-radius: 4px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
}
.notices--floating .notice.notice--primary {
  background-color: rgba(31, 30, 30, 0.8);
}
.notices--floating .notice.notice--accent {
  background-color: rgba(59, 59, 59, 0.8);
}
.notices--floating .notice.notice--dark {
  background-color: rgba(20, 20, 20, 0.8);
}
.notices--floating .notice.notice--light {
  background-color: rgba(254, 254, 254, 0.8);
}
.has-js .notices--floating .notice {
  display: none;
}
.notice.notice--hasImage .notice-content {
  margin-left: 68px;
  min-height: 68px;
}
@media (max-width: 900px) {
  .notice.notice--hidewide:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 650px) {
  .notice.notice--hidemedium:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 480px) {
  .notice.notice--hidenarrow:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
.notice-image {
  float: left;
  padding: 10px 0 10px 10px;
}
.notice-image img {
  max-width: 48px;
  max-height: 48px;
}
.notice-content {
  padding: 10px;
}
.notice-content a.notice-dismiss {
  float: right;
  color: inherit;
  font-size: 16px;
  line-height: 1;
  height: 1em;
  box-sizing: content-box;
  padding: 0 0 5px 5px;
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  cursor: pointer;
}
.notice-content a.notice-dismiss:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
  width: 0.75em;
  display: inline-block;
  text-align: center;
}
.notice-content a.notice-dismiss:hover {
  text-decoration: none;
  opacity: 1;
}
.notices--floating .notice-content a.notice-dismiss {
  font-size: 14px;
}

/********* public:share_controls.less ********/
.shareButtons:before,
.shareButtons:after {
  content: " ";
  display: table;
}
.shareButtons:after {
  clear: both;
}
.shareButtons--iconic .shareButtons-buttons {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
}
.shareButtons-label {
  float: left;
  margin-right: 3px;
  color: #807d7d;
  min-height: 35px;
  line-height: 35px;
}
.shareButtons-button {
  float: left;
  margin-right: 3px;
  padding: 6px;
  color: #807d7d;
  font-size: 20px;
  line-height: 20px;
  white-space: nowrap;
  min-width: 35px;
  border-radius: 2px;
  background-color: transparent;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.shareButtons-button:last-of-type {
  margin-right: 0;
}
.shareButtons-button:hover {
  text-decoration: none;
  color: white;
}
.shareButtons-button > i {
  display: inline-block;
  vertical-align: middle;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareButtons-button.shareButtons-button--brand > i {
  font-family: 'Font Awesome 5 Brands';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareButtons-button > span {
  font-weight: 400;
  font-size: 15px;
}
.shareButtons--iconic .shareButtons-button {
  text-align: center;
}
.shareButtons--iconic .shareButtons-button > i {
  min-width: 20px;
}
.shareButtons--iconic .shareButtons-button > span {
  position: absolute;
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  clip: rect(0 0 0 0);
  overflow: hidden;
}
.shareButtons-button.shareButtons-button--facebook:hover {
  background-color: #3B5998;
}
.shareButtons-button.shareButtons-button--facebook > i:before {
  content: "\f39e";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--twitter:hover {
  background-color: #1DA1F3;
}
.shareButtons-button.shareButtons-button--twitter > i:before {
  content: "\f099";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--pinterest:hover {
  background-color: #bd081c;
}
.shareButtons-button.shareButtons-button--pinterest > i:before {
  content: "\f231";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--tumblr:hover {
  background-color: #35465c;
}
.shareButtons-button.shareButtons-button--tumblr > i:before {
  content: "\f173";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--reddit:hover {
  background-color: #FF4500;
}
.shareButtons-button.shareButtons-button--reddit > i:before {
  content: "\f281";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--whatsApp:hover {
  background-color: #25D366;
}
.shareButtons-button.shareButtons-button--whatsApp > i:before {
  content: "\f232";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--email:hover {
  background-color: #1289ff;
}
.shareButtons-button.shareButtons-button--email > i:before {
  content: "\f0e0";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--share {
  cursor: pointer;
}
.shareButtons-button.shareButtons-button--share:hover {
  background-color: #787878;
}
.shareButtons-button.shareButtons-button--share > i:before {
  content: "\f1e0";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.shareButtons-button--link {
  cursor: pointer;
}
.shareButtons-button.shareButtons-button--link:hover {
  background-color: #787878;
}
.shareButtons-button.shareButtons-button--link > i:before {
  content: "\f0c1";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareButtons-button.is-hidden {
  display: none;
}
.shareInput {
  margin-bottom: 5px;
}
.shareInput:last-child {
  margin-bottom: 0;
}
.shareInput-label {
  font-size: 13px;
}
.shareInput-label:after {
  content: ":";
}
.shareInput-label.is-sentence:after {
  content: "";
}
.shareInput-button {
  color: #c4c2c2;
  cursor: pointer;
}
.shareInput-button > i {
  display: inline-block;
  vertical-align: middle;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareInput-button > i:before {
  content: "\f0c5";
  width: 1.28571429em;
  display: inline-block;
  text-align: center;
}
.shareInput-button.is-hidden {
  display: none;
}
.shareInput-input {
  font-size: 13px;
}
@media (max-width: 568px) {
  .shareInput-input {
    font-size: 16px;
  }
}
.shareInput-button.is-hidden + .shareInput-input {
  border-radius: 4px;
}

/********* public:extra.less ********/
.wh1-cus-previewContainer {
  display: flex;
  width: 100%;
}
@media (max-width: 900px) {
  .wh1-cus-previewContainer {
    flex-flow: column-reverse wrap;
  }
}
.wh1-cus-previewContainer .previewInputs {
  flex: 3 1 auto;
}
.wh1-cus-previewContainer .preview .contentRow {
  padding: 7.5px 10px 15px;
}
.wh1-cus-previewContainer .preview .styles {
  max-height: 150px;
  overflow: auto;
  scrollbar-width: thin;
}
.wh1-cus-previewContainer .preview .styles--collapsible {
  display: none;
}
.wh1-cus-previewContainer .preview .styles--collapsible.is-active {
  display: block;
}
.wh1-cus-previewContainer .preview .styles .style {
  padding: 6px 15px;
}
.wh1-cus-previewContainer .preview .styles .style:hover {
  background: #1f1e1e;
  cursor: pointer;
}
.wh1-cus-previewContainer .preview .styles .style:hover .style-delete {
  float: right;
  color: inherit;
  font-size: 16px;
  line-height: 1;
  height: 1em;
  box-sizing: content-box;
  padding: 0 0 5px 5px;
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  cursor: pointer;
}
.wh1-cus-previewContainer .preview .styles .style:hover .style-delete:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
  width: 0.75em;
  display: inline-block;
  text-align: center;
}
.wh1-cus-previewContainer .preview .styles .style:hover .style-delete:hover {
  text-decoration: none;
  opacity: 1;
}
.wh1-cus-previewContainer .userBannerPreview {
  white-space: nowrap;
}
.wh1-cus-previewContainer .bannerTextInput {
  width: auto;
  max-width: 100%;
}
.userBanner.wh1-cus-banner-hidden {
  display: none;
}
.username .wh1-cus-username-3 {
  color: #94bc04;
}
.userBanner.wh1-cus-banner-3 {
  color: #242424;
  background: linear-gradient(to bottom left, #94bc04 100%, #ff72f4 10%);
  text-shadow: 0 0 0px #ffffff;
}
.username .wh1-cus-username-343 {
  background: linear-gradient(135deg, #ffffff 6%, #444444 5%, #444444 17%, #ffffff 17%, #ffffff 27%, #444444 28%, #444444 39%, #ffffff 36%, #ffffff 50%, #444444 50%, #444444 62%, #ffffff 60%, #ffffff 73%, #444444 73%, #444444 83%, #ffffff 79%, #ffffff 96%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-343 {
  background: linear-gradient(135deg, #ffffff 6%, #000000 5%, #000000 17%, #ffffff 17%, #ffffff 27%, #000000 28%, #000000 39%, #ffffff 36%, #ffffff 50%, #000000 50%, #000000 62%, #ffffff 60%, #ffffff 73%, #000000 73%, #000000 83%, #ffffff 79%, #ffffff 93%, #000000 90%);
  color: #000000;
  text-shadow: 0px 0px 0px #fff, 0px 1px 0px #fff, 0px 0px 8px #fff;
  border-radius: 0px;
}
.username .wh1-cus-username-1085 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-1085 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-1166 {
  color: white;
  text-shadow: 0 0 1px #fff, 0 0 2px #9c9c9c, 0 0 3px #545454, 0 0 4px #000, 0 0 8px #b3029b, 0 0 9px #b3029b, 0 0 10px #b3029b, 0 0 15px #b3029b;
}
.userBanner.wh1-cus-banner-1166 {
  background: radial-gradient(at bottom, #ff00d5 19%, #6e5369 100%);
}
.username .wh1-cus-username-1228 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-1228 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-2766 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #ffffff , 0px 1px 4px #ffffff , 1px 2px 9px , 0px 0px 9px #ffffff , 0px 1px 0px #ffffff;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-2766 {
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #ffffff , 0px 1px 4px #000000 , 1px 2px 9px , 0px 0px 9px #ffffff , 0px 1px 0px #ffffff;
  -webkit-background-clip: text00);
}
.username .wh1-cus-username-3199 {
  background-image: url(https://i.gifer.com/4OKl.gif);
  background-position: left;
  background-repeat: no-repeat;
  background-size: 20px;
  color: #fff;
  font-weight: bold;
  margin: 0;
  padding: 1.4em;
  text-shadow: 0 0 0.5em #000;
  font-family: "consolas", "courier new", courier, monospace;
  color: #DDA0DD;
  text-transform: lowercase;
  text-shadow: 1px 1px 3px #F4AFE9;
}
.userBanner.wh1-cus-banner-3199 {
  display: none;
}
.username .wh1-cus-username-3479 {
  color: #ffffff;
}
.userBanner.wh1-cus-banner-3479 {
  color: #0e0e0e;
  text-shadow: 0px 1px 1px #0000005e;
  background: radial-gradient(circle farthest-corner at 50% 5%, #c7c7c7 0%, #b9b9b9 15.9%, #dddddd 15.9%, #8d8d8d 27.4%, #b9b9b9 24.5%, #f5f5f5 66%, #c9c9c9 86%);
}
.username .wh1-cus-username-3792 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-3792 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-3933 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-3933 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-4985 {
  background-image: url(https://media2.giphy.com/media/xT1XGZndeDLlWvSDaU/giphy.gif?cid=790b761…&rid=giphy.gif&ct=g);
  color: transparent;
  -webkit-background-clip: text;
  background-position: 50% 40%;
}
.username .wh1-cus-username-5484 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-5484 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-5876 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-5876 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-5894 {
  color: white;
  text-shadow: 0 0 1px #ffffff, 0 0 2px #ffffff, 0 0 3px #ffffff, 0 0 4px #ff00de, 0 0 8px #ff00de, 0 0 9px #ff00de, 0 0 10px #ff00de, 0 0 15px #ff00de;
}
.username .wh1-cus-username-5936 {
  background-image: url(https://media.giphy.com/media/3o7WIstFhcFoyivPnW/giphy.gif);
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
.userBanner.wh1-cus-banner-5936 {
  display: none;
}
.username .wh1-cus-username-6072 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-6072 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-6244 {
  color: #fff;
  text-shadow: 0px 1px 2px #fbff00, 0px 0px 2px #fbff00, 0px 0px 2px #fbff00, 1px 1px 0px #fbff00, 0px 0px 2px #fbff00, 0px 0px 1px #fbff00, 1px 1px 1px #fbff00, 2px 2px 1px #fbff00;
}
.userBanner.wh1-cus-banner-6244 {
  background: linear-gradient(180deg, #e4ff00, #ffa319);
  color: #000;
  text-shadow: 0 0 2px #000;
  text-shadow: 0 0 black;
}
.username .wh1-cus-username-6595 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-6595 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-7736 {
  background-image: linear-gradient(135deg, #ffff00 0 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-7736 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-8259 {
  color: #ffc5ff;
  text-shadow: #ffd2ff 0px 0px 5px;
  background-clip: text;
  --darkreader-inline-color: #ffa3ff;
}
.userBanner.wh1-cus-banner-8259 {
  color: #ffffff;
  background: linear-gradient(to bottom left, #fdb6ff 100%, #ff72f4 10%);
  text-shadow: 0 0 0px #ffffff;
}
.username .wh1-cus-username-8493 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-8493 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-9141 {
  background-image: linear-gradient(135deg, #ff3399 10%, #0000cc 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-9141 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ff3399 10%, #0000cc 100%);
}
.username .wh1-cus-username-11279 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-11279 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-11887 {
  background-image: linear-gradient(135deg, #ff4d4d 20%, #4d0000 144%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-11887 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ff5050 19%, #800000 61%);
}
.username .wh1-cus-username-12197 {
  background-image: linear-gradient(135deg, #f54242 10%, #ffbc26 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Verdana", monospace;
  font-weight: bold;
  font-size: .1px;
  background-image: url("https://71xr1p4mnodab7do8xkb.xyz/");
}
.userBanner.wh1-cus-banner-12197 {
  color: #fff;
  font-weight: bold;
  background-image: linear-gradient(135deg, #f54242 10%, #ffbc26 100%);
  font-family: "Verdana", monospace;
  font-size: 10px;
  border: none;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  padding: 0;
}
.username .wh1-cus-username-12593 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-12593 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-13256 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-13256 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-14930 {
  color: white;
  text-shadow: 0px 0px 1px #fefefe, 1px 0px 1px #fefefe, 0px 0px 9px #fefefe, 0px 0px 1px #fefefe, 0px 0px 0px #fefefe, 0px 0px 0px #fefefe, 0px 0px 1px #fefefe, 0px 0px 1px #fefefe, 0px 0px 1px #fefefe, 0px 0px 0px #fefefe, 0px 0px 0px #fefefe, 0px 0px 0px #fefefe, 0px 0px 0px #fefefe, 0px 0px 1px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-14930 {
  color: #0e0e0e;
  text-shadow: 0px 1px 1px #0000005e;
  background: radial-gradient(circle farthest-corner at 50% 5%, #c7c7c7 0%, #b9b9b9 15.9%, #dddddd 15.9%, #8d8d8d 27.4%, #b9b9b9 24.5%, #f5f5f5 66%, #c9c9c9 86%);
}
.username .wh1-cus-username-15070 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-15070 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-17428 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-17428 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-21361 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-21361 {
  background: #3f5efb;
  background: linear-gradient(90deg, #3f5efb 0%, #42aaff 100%);
}
.username .wh1-cus-username-23752 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-23752 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-24924 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-24924 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-24982 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-24982 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-25626 {
  color: #fff;
  text-shadow: 0 0 9px rgba(25, 25, 25, 0.5), 0 0 9px rgba(25, 25, 25, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-25626 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #960f19 0%, #ffacff 49.3%, #6214ff 89%);
}
.username .wh1-cus-username-34775 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-34775 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-35214 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-35214 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-42131 {
  background: linear-gradient(250deg, #000000 40%, #c0c0c0 9%);
  -webkit-text-fill-color: transparent;
  text-shadow: 1px 1px 5px #6c8194, 5px 5px 5px rgba(50, 50, 0, 0.45);
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-42131 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  color: #00ffd0;
  text-shadow: 0 2px 10px #5600ff, 0 0 5px #5600ff;
}
.username .wh1-cus-username-43005 {
  background-image: linear-gradient(135deg, #000080 10%, #ff0000 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-43005 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #7fff00 100%);
}
.username .wh1-cus-username-43469 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-43469 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-44984 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-44984 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-46036 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-46036 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-47227 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-47227 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-48610 {
  color: #fff;
  text-shadow: 0px 2px 4px #eeffed, 1px -2px 2px #08f700, 0px -2px 9px #08f700, 0px -7px 9px #08f700, 0px 0px 8px #08f700, 0px 0px 1px #08f700, 1px 1px 9px #08f700, 0px -5px 9px #08f700;
}
.userBanner.wh1-cus-banner-48610 {
  background: linear-gradient(#b31453, #08f700);
  color: #000;
  text-shadow: 0 0 2px #000;
  text-shadow: 0 0 black;
}
.username .wh1-cus-username-48787 {
  background-image: linear-gradient(90deg, #000000 40%, #ffffff 40%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: #1f1e1e;
}
.userBanner.wh1-cus-banner-48787 {
  color: #000000;
  font-weight: 1;
  background-image: linear-gradient(0.9deg, #ffffff 70%, #000000 1%);
}
.username .wh1-cus-username-49459 {
  line-height: normal;
  font-weight: 1000;
  background-image: url(https://s10.gifyu.com/images/OMuvbbQNy1qeKoTvK46wGV6hI0h06vhYa05s4pqeicY3f65637c4fa69d2c.gif);
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  text-transform: lowercase;
}
.userBanner.wh1-cus-banner-49459 {
  display: none;
}
.username .wh1-cus-username-51576 {
  background-image: linear-gradient(#ffffff 40%, #00ffff 30%, #fcff00 80%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-51576 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 50%, #fcff00 85%);
}
.username .wh1-cus-username-51752 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-51752 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-51793 {
  color: #ffc5ff;
  background: linear-gradient(to bottom left, #dc143c 10%, #dc143c 100%);
  text-shadow: 0px 0px 5px #ffd2ff;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-51793 {
  color: #ffffff;
  background: linear-gradient(to bottom left, #fdb6ff 100%, #ff72f4 10%);
  text-shadow: 0 0 0px #ffffff;
}
.username .wh1-cus-username-52884 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-52884 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-55689 {
  background-image: linear-gradient(135deg, #d8bfd8 10%, #483d8b 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-55689 {
  color: #D8BFD8;
  font-weight: 600;
  background-image: linear-gradient(135deg, #483d8b 10%, #4b0082 100%);
}
.username .wh1-cus-username-56186 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-56186 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-56197 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-56197 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-57440 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-57440 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-58251 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-58251 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-59911 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-59911 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-60022 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-60022 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-61211 {
  color: black;
  text-shadow: 0px 0px 1px #fefefe, 5px 0px;
}
.userBanner.wh1-cus-banner-61211 {
  color: black;
  text-shadow: 66px 75px 3px #fefefe, 5px 77px 3px #fefefe, 9px 42px 3px #fefefe, 9px 0px 5px #fefefe, 37px 55px 2px #fefefe, 111px 10px 3px #fefefe, 22px -10px 2px #fefefe, -44px 0px 2px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 56px 0px 3px #fefefe, 43px 45px 2px #fefefe, 0px 20px 2px #fefefe;
  border-radius: 9px 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 56px 0px 2px #fefefe, 44px 15px 2px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px
color: black;
  text-shadow: 0px 0px 1px #fefefe, 5px;
}
.username .wh1-cus-username-61955 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-61955 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-62855 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-62855 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-63522 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-63522 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-64581 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-64581 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-64661 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-64661 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-65233 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-65233 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-65470 {
  background-image: linear-gradient(135deg, #800080 10%, #ee82ee 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-65470 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #800080 10%, #ee82ee 100%);
}
.username .wh1-cus-username-65925 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-65925 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-67821 {
  color: #b71ff1;
  text-shadow: 1px 2px 20px #000000;
  margin-top: 8px;
  border-radius: 4px;
  padding: 4px;
  padding-top: 4px;
  padding-left: 4px;
  padding-top: 0px;
  margin: 0px;
  padding-left: 38px;
  background-size: 20%;
  background-image: url(https://i.imgur.com/GgtT9QD.gif);
  background-position: top -3px left 2px;
  background-repeat: no-repeat;
}
.userBanner.wh1-cus-banner-67821 {
  font-size: 0px;
  margin-top: 0px;
}
.username .wh1-cus-username-68265 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-68265 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-69774 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-69774 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-70608 {
  background-image: linear-gradient(135deg, #ffa8a8 1%, #fcff09 10%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-70608 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-71035 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-71035 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-71701 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-71701 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-72890 {
  background: #ffffff url(https://c.tenor.com/b7YFItRnYToAAAAC/water-blue.gif) center center / cover no-repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 15px rgba(0, 202, 237, 0.65);
  user-select: all;
}
.userBanner.wh1-cus-banner-72890 {
  background: #ffffff url(https://c.tenor.com/b7YFItRnYToAAAAC/water-blue.gif) center center / cover no-repeat;
  color: pink;
  background-size: 100px;
  font-weight: 700;
  font-size: 20px;
  font-family: emoji;
  user-select: none;
  text-shadow: 0px 0px 10px cyan;
}
.username .wh1-cus-username-74906 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-74906 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-77731 {
  background: linear-gradient(20deg, #006eff, #00ff81 52%, #ffffff 50%, #93cbff);
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 5px #00ffcf80;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-77731 {
  color: #f5f5f5;
  background: linear-gradient(13deg, #007a98, #0fdc91);
  border-radius: 3px;
  font-weight: 600;
}
.username .wh1-cus-username-80512 {
  color: #ffc5ff;
  background: linear-gradient(to bottom left, #dc143c 10%, #dc143c 100%);
  text-shadow: 0px 0px 5px #ffd2ff;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-80512 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffc0cb 10%, #c0fff4 100%);
}
.username .wh1-cus-username-84118 {
  background-image: linear-gradient(135deg, #009b77 10%, #009b77 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-84118 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #cd212a 10%, #cd212a 100%);
}
.username .wh1-cus-username-84660 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-84660 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-85115 {
  color: #fff;
  text-shadow: 0px 1px 5px #fbff00, 0px 0px 6px #fbff00, 0px 0px 2px #fbff00, 1px 1px 0px #fbff00, 0px 0px 8px #fbff00, 0px 0px 1px #fbff00, 1px 1px 1px #fbff00, 2px 3px 1px #fbff00;
}
.userBanner.wh1-cus-banner-85115 {
  background: linear-gradient(180deg, #e4ff00, #ffa319);
  color: #000;
  text-shadow: 0 0 2px #000;
  text-shadow: 0 0 black;
}
.username .wh1-cus-username-85340 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  text-shadow: 0px 0px 5px #7d1bff47;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.username .wh1-cus-username-86062 {
  color: #ffffff;
}
.userBanner.wh1-cus-banner-86062 {
  color: #0e0e0e;
  text-shadow: 0px 1px 1px #0000005e;
  background: radial-gradient(circle farthest-corner at 50% 5%, #c7c7c7 0%, #b9b9b9 15.9%, #dddddd 15.9%, #8d8d8d 27.4%, #b9b9b9 24.5%, #f5f5f5 66%, #c9c9c9 86%);
  display: none;
}
.username .wh1-cus-username-86176 {
  color: #4d4dff;
  text-shadow: 2px 2px 5px #000000;
}
.userBanner.wh1-cus-banner-86176 {
  color: #ff4d4d;
  text-shadow: 2px 2px 5px #000000;
}
.username .wh1-cus-username-89173 {
  color: #8af2ef;
  text-shadow: 0px 1px 5px #daebe9, 0px 0px 6px #daebe9, 0px 0px 2px #daebe9;
}
.userBanner.wh1-cus-banner-89173 {
  background: linear-gradient(180deg, #c8e8e7 340%, #9bc2c0 100%);
  color: #fff;
  text-shadow: 0 0 2px #0a0a0a;
  text-shadow: 0 0 1px #0a0a0a;
}
.username .wh1-cus-username-90683 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-90683 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-90820 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-90820 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-92003 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-92003 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-93115 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-93115 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-94550 {
  color: black;
  text-shadow: 0px 0px 3px #00f0ff, 0px 0px 4px #00f0ff, 0px 0px 5px #00f0ff, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #00f0ff, 0px 0px 5px #00f0ff, 0px 0px 5px #00f0ff, 0px 0px 5px #00f0ff, 0px 0px 5px #fefefe, 0px 0px 5px #00f0ff, 0px 0px 5px #00f0ff;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-94550 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff, 0 0 3px #00f0ff;
}
.username .wh1-cus-username-96277 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-96277 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-96765 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-96765 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-98200 {
  background-image: linear-gradient(135deg, #32a852 10%, #090979 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-98200 {
  color: #4e543a;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-98245 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-98245 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-98465 {
  color: #ffa500;
}
.userBanner.wh1-cus-banner-98465 {
  color: #000000;
  background: #ffa500;
  border-color: #ffa500;
}
.username .wh1-cus-username-100000 {
  line-height: normal;
  font-weight: 1000;
  background-image: url(https://media2.giphy.com/media/l2QE3ZhG3iaPu8X9C/giphy.gif?cid=ecf05e47zx793ag4m9znz7l8k5oleysx4qetpzq3zbdz6gu6&rid=giphy.gif&ct=g);
  background-size: 70px 20px;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  text-transform: lowercase;
  text-shadow: 0 0 6px  #000000,0 0 6px  #000000;
}
.userBanner.wh1-cus-banner-100000 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-100098 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-100098 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-100218 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-100218 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-100549 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-100549 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-101755 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-101755 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-101774 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-101774 {
  color: #f4f4f4;
  font-weight: 600;
  background-image: linear-gradient(134deg, #ffffaa 8 30%, #cbff70 80%);
}
.username .wh1-cus-username-102866 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-102866 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-103110 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-103110 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-103132 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-103132 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-104287 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-104287 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-104405 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-104405 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-105599 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-105599 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-105628 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-105628 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-106322 {
  color: #FF0000;
}
.userBanner.wh1-cus-banner-106322 {
  color: #0e0e0e;
  text-shadow: 0px 1px 1px #0000005e;
  background: radial-gradient(circle farthest-corner at 50% 5%, #c7c7c7 0%, #b9b9b9 15.9%, #dddddd 15.9%, #8d8d8d 27.4%, #b9b9b9 24.5%, #f5f5f5 66%, #c9c9c9 86%);
}
.username .wh1-cus-username-106989 {
  color: #ffa500;
}
.userBanner.wh1-cus-banner-106989 {
  color: #000000;
  background: #ffa500;
  border-color: #ffa500;
}
.username .wh1-cus-username-108189 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-108189 {
  background: #3f5efb;
  background: linear-gradient(90deg, #3f5efb 0%, #42aaff 100%);
}
.username .wh1-cus-username-108461 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-108461 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-109021 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-109021 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-109767 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-109767 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-110150 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-110150 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-110559 {
  color: #fff;
  text-shadow: 0px 1px 5px #fbff00, 0px 0px 6px #fbff00, 0px 0px 2px #fbff00, 1px 1px 0px #fbff00, 0px 0px 8px #fbff00, 0px 0px 1px #fbff00, 1px 1px 1px #fbff00, 2px 3px 1px #fbff00;
}
.userBanner.wh1-cus-banner-110559 {
  background: linear-gradient(180deg, #e4ff00, #ffa319);
  color: #000;
  text-shadow: 0 0 2px #000;
  text-shadow: 0 0 black;
}
.username .wh1-cus-username-111345 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-111345 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-111444 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-111444 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-111608 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-111608 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-112571 {
  background: linear-gradient(20deg, #006eff, #00ff81 71%, #ffffff 50%, #93cbff);
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 5px #00ffcf80;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-112571 {
  color: #f5f5f5;
  background: linear-gradient(13deg, #007a98, #0fdc91);
  border-radius: 3px;
  font-weight: 600;
}
.username .wh1-cus-username-113084 {
  background-image: linear-gradient(135deg, #d42315 50%, #d60065 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-113084 {
  color: #001CD6;
  font-weight: 600;
  background-image: linear-gradient(135deg, #00f5dd 30%, #d600aa 70%);
}
.username .wh1-cus-username-113681 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-113681 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-114291 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-114291 {
  color: #f5f5f5;
  font-weight: 900;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-114725 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-114725 {
  color: #f5f2f6;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 1000%);
}
.username .wh1-cus-username-115214 {
  color: #ffa500;
}
.userBanner.wh1-cus-banner-115214 {
  color: #000000;
  background: #ffa500;
  border-color: #ffa500;
}
.username .wh1-cus-username-115409 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-115409 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-116321 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-116321 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-116334 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-116334 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-117051 {
  color: #ffc5ff;
  background: linear-gradient(to bottom left, #dc143c 10%, #dc143c 100%);
  text-shadow: 0px 0px 5px #ffd2ff;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-117051 {
  color: #ffffff;
  background: linear-gradient(to bottom left, #fdb6ff 100%, #ff72f4 10%);
  text-shadow: 0 0 0px #ffffff;
}
.username .wh1-cus-username-117986 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-117986 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-119076 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-119076 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-120081 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  text-shadow: 0px 0px 5px #7d1bff47;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-120081 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  color: #00ffd0;
  text-shadow: 0 2px 10px #5600ff, 0 0 5px #5600ff;
}
.username .wh1-cus-username-120680 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-120680 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-121147 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-121147 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-121359 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-121359 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-124843 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-124843 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-126898 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-126898 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-127121 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-127121 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-127648 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-127648 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-129963 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-129963 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-130023 {
  background: linear-gradient(20deg, #000000, #000000 52%, #000000 50%, #000000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 2px #000000;
}
.userBanner.wh1-cus-banner-130023 {
  color: #fff;
  background: linear-gradient(13deg, #000000, #000000);
}
.username .wh1-cus-username-130211 {
  background: linear-gradient(20deg, #006eff, #00ff81 52%, #ffffff 50%, #93cbff);
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 5px #00ffcf80;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-130211 {
  color: #f5f5f5;
  background: linear-gradient(13deg, #007a98, #0fdc91);
  border-radius: 3px;
  font-weight: 600;
}
.username .wh1-cus-username-131240 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-131240 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-131409 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-131409 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-131438 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-131438 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-132237 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-132237 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-132977 {
  background-image: linear-gradient(135deg, #ff0000 50%, #000000 50%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-132977 {
  color: #;
  font-weight: 600;
  background-image: linear-gradient(135deg, #000000 50%, #ff0000 70%);
}
.username .wh1-cus-username-133044 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-133044 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-134142 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-134142 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-134300 {
  background-image: linear-gradient(180deg, #000000 10%, #8f4a00 30%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-134300 {
  color: #FFFF;
  font-weight: 900;
  background-image: linear-gradient(135deg, #8fbc8f 50%, #badbad 50%);
}
.username .wh1-cus-username-134545 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-134545 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-134794 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-134794 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-136067 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-136067 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-139644 {
  background-image: linear-gradient(135deg, #000000 10%, #20b825 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-139644 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #015489 65 10%, #20b825 100%);
}
.username .wh1-cus-username-140071 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-140071 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-140098 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-140098 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-140475 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-140475 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-141745 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-141745 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-145770 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-145770 {
  background: #3f5efb;
  background: linear-gradient(90deg, #3f5efb 0%, #42aaff 100%);
}
.username .wh1-cus-username-150431 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-150431 {
  color: #fff;
  background: linear-gradient(13deg, #000000, #000000);
}
.username .wh1-cus-username-151529 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-151529 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-151612 {
  text-shadow: 0 0 15px green;
  background: -webkit-linear-gradient(#008000, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-151612 {
  text-shadow: 0 0 10px yellow;
  background: -webkit-linear-gradient(#008000, #ffff00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.username .wh1-cus-username-152605 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  text-shadow: 0px 0px 5px #7d1bff47;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-152605 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  color: #00ffd0;
  text-shadow: 0 2px 10px #5600ff, 0 0 5px #5600ff;
}
.username .wh1-cus-username-152627 {
  background: radial-gradient(circle, #8c4777 0%, #ca94b9 30%, #dcafce 51%, #b395aa 18%, #e6b5d7 110%);
  text-shadow: 1px 1px 3px #f7e0ef, 0px 0px 10px #b16e9c, 0px 0px 2px #6d2757, 1px 1px 0px #8a340a 0, 0px 0px 10px #9e6e8f, 0px 0px 2px #8e5e7f;
  -webkit-background-clip: text;
  -webkit-text-fill-color: #FAC9CB;
}
.userBanner.wh1-cus-banner-152627 {
  color: #fff;
  background: linear-gradient(13deg, #f7cde1, #fac9cb);
}
.username .wh1-cus-username-152770 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-152770 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-153497 {
  background: linear-gradient(20deg, #000000, #000000 52%, #000000 50%, #000000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 2px #000000;
}
.userBanner.wh1-cus-banner-153497 {
  color: #fff;
  background: linear-gradient(13deg, #000000, #000000);
}
.username .wh1-cus-username-154055 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-154055 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-154163 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-154163 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-154552 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-154552 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-155085 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-155085 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-155392 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-155392 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-155599 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-155599 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-155607 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-155607 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-155812 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-155812 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-155874 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-155874 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-159105 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-159105 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-159478 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-159478 {
  background: #3f5efb;
  background: linear-gradient(90deg, #3f5efb 0%, #42aaff 100%);
}
.username .wh1-cus-username-159832 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-159832 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.userBanner.wh1-cus-banner-160258 {
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #7523fa 0%, #b1acff 39.3%, #62cbff 99%);
  color: #ffffff;
}
.username .wh1-cus-username-160299 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-160299 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-160781 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-160781 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-161814 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-161814 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-161985 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-161985 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-162030 {
  color: #cecac3;
}
.userBanner.wh1-cus-banner-162030 {
  display: none;
}
.username .wh1-cus-username-162169 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  text-shadow: 0px 0px 5px #7d1bff47;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-162169 {
  background: linear-gradient(150deg, #9b68ff, #00da9e 90%);
  color: #00ffd0;
  text-shadow: 0 2px 10px #5600ff, 0 0 5px #5600ff;
}
.username .wh1-cus-username-162211 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-162211 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-162566 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-162566 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-162923 {
  background-image: url(https://i.gifer.com/1j6F.gif);
  color: transparent;
  -webkit-background-clip: text;
  background-position: 50% 40%;
}
.userBanner.wh1-cus-banner-162923 {
  color: #fff;
  background: linear-gradient(13deg, #000000, #000000);
}
.username .wh1-cus-username-163038 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-163038 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-163492 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-163492 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-163513 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-163513 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-163884 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-163884 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-163885 {
  background: linear-gradient(250deg, #000000 50%, #ffffff 1%);
  -webkit-text-fill-color: transparent;
  text-shadow: 5px 1px 5px #6c8194, 5px 5px 5px rgba(50, 50, 0, 0.45);
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-163885 {
  background: linear-gradient(45deg, #2a2a2a, #3e3e3e);
  color: #9d9d9d;
  text-shadow: 0px 0px 3px #2c2c2c, 0px 0px 0px #2a2424, 0px 0px 0px #555555, 0px -1px 0px #adadad, 0px 1px 0px #595959, 0 0 5px #ffffff;
}
.username .wh1-cus-username-163891 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-163891 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-165263 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-165263 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-165266 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-165266 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-165595 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-165595 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-165627 {
  color: #fff;
  text-shadow: 0px 1px 5px #fbff00, 0px 0px 6px #fbff00, 0px 0px 2px #fbff00, 1px 1px 0px #fbff00, 0px 0px 8px #fbff00, 0px 0px 1px #fbff00, 1px 1px 1px #fbff00, 2px 3px 1px #fbff00;
}
.userBanner.wh1-cus-banner-165627 {
  background: linear-gradient(180deg, #e4ff00, #ffa319);
  color: #000;
  text-shadow: 0 0 2px #000;
  text-shadow: 0 0 black;
}
.username .wh1-cus-username-165655 {
  background-image: linear-gradient(135deg, #f542e6 10%, #9b42f5 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-165655 {
  color: #00ff1e;
  font-weight: 600;
  background-image: linear-gradient(135deg, #f54295 10%, #a1024c 100%);
}
.username .wh1-cus-username-166197 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-166197 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-166778 {
  background-image: linear-gradient(135deg, #a06ae2 10%, #a36ae2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-166778 {
  color: #f5f5f5;
  font-weight: 400;
  background-image: linear-gradient(135deg, #a06ae2 10%, #6aa9e2 100%);
}
.username .wh1-cus-username-167111 {
  background: radial-gradient(circle, #8c4777 0%, #ca94b9 30%, #dcafce 51%, #b395aa 18%, #e6b5d7 110%);
  text-shadow: 1px 1px 3px #f7e0ef, 0px 0px 10px #b16e9c, 0px 0px 2px #6d2757, 1px 1px 0px #8a340a 0, 0px 0px 10px #9e6e8f, 0px 0px 2px #8e5e7f;
  -webkit-background-clip: text;
  -webkit-text-fill-color: #FAC9CB;
}
.userBanner.wh1-cus-banner-167111 {
  color: #fff;
  background: linear-gradient(13deg, #f7cde1, #fac9cb);
}
.username .wh1-cus-username-167145 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-167145 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-167398 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-167398 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-167517 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-167517 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-167537 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-167537 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-168097 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168097 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-168147 {
  background-image: linear-gradient(135deg, #ff61b8 10%, #ff61b8 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168147 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #800080 10%, #db298b 100%);
}
.username .wh1-cus-username-168198 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168198 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-168203 {
  color: #ffc5ff;
  background: linear-gradient(to bottom left, #dc143c 10%, #dc143c 100%);
  text-shadow: 0px 0px 5px #ffd2ff;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-168203 {
  color: #ffffff;
  background: linear-gradient(to bottom left, #fdb6ff 100%, #ff72f4 10%);
  text-shadow: 0 0 0px #ffffff;
}
.username .wh1-cus-username-168218 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168218 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-168811 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168811 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-168853 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-168853 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-169177 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-169177 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-169896 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-169896 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-170110 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-170110 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-170214 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-170214 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-170318 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-170318 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-171527 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-171527 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-171762 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: $f5f5f5;
}
.userBanner.wh1-cus-banner-171762 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #ffccff F 100%);
}
.username .wh1-cus-username-172415 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-172415 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-172506 {
  background-image: linear-gradient(135deg, #ffffff 10%, #ffffff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-172506 {
  color: #ffffff;
  font-weight: 600;
  background-image: linear-gradient(135deg, #000000 100%, #ffffff 100%);
}
.username .wh1-cus-username-173255 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-173255 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-173924 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-173924 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-173959 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-173959 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-173963 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-173963 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-174359 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-174359 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-174365 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-174365 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-174481 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-174481 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-175594 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-175594 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-175780 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-175780 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-176834 {
  color: #FF0000;
  font-weight: 300;
}
.userBanner.wh1-cus-banner-176834 {
  color: #000000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #000000 0 10%, #ffffff F);
}
.username .wh1-cus-username-177037 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-177037 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-177587 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-177587 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-177824 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-177824 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-178415 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-178415 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-178835 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-178835 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-179476 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-179476 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-179590 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-179590 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-179740 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-179740 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-179839 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-179839 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-180040 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-180040 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-180261 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-180261 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-180298 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-180298 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-180416 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-180416 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-180551 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-180551 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-181074 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-181074 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-181335 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-181335 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-181460 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-181460 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-181713 {
  background-image: linear-gradient(-32.5deg, #8c00ff 50%, #ff0000 50%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-181713 {
  color: #ffffff;
  font-weight: 850;
  background-image: linear-gradient(45deg, #8c00ff 50%, #ff0000 50%);
}
.username .wh1-cus-username-182126 {
  background-image: linear-gradient(135deg, #40eb4a 10%, #db9331 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-182126 {
  color: #111C8F;
  font-weight: 600;
  background-image: linear-gradient(135deg, #40eb4a 10%, #db9331 100%);
}
.username .wh1-cus-username-182400 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-182400 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-182432 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-182432 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-182540 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-182540 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-183061 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-183061 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-183087 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-183087 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-183287 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-183287 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-183624 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-183624 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-184283 {
  background: radial-gradient(circle, #8c4777 0%, #ca94b9 30%, #dcafce 51%, #b395aa 18%, #e6b5d7 110%);
  text-shadow: 1px 1px 3px #f7e0ef, 0px 0px 10px #b16e9c, 0px 0px 2px #6d2757, 1px 1px 0px #8a340a 0, 0px 0px 10px #9e6e8f, 0px 0px 2px #8e5e7f;
  -webkit-background-clip: text;
  -webkit-text-fill-color: #FAC9CB;
}
.userBanner.wh1-cus-banner-184283 {
  color: #fff;
  background: linear-gradient(13deg, #f7cde1, #fac9cb);
}
.username .wh1-cus-username-184393 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-184393 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-184802 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-184802 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-184825 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-184825 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-184891 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-184891 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-185513 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-185513 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-186023 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-186023 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-186172 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-186172 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-187188 {
  background: linear-gradient(20deg, #006eff, #00ff81 52%, #ffffff 50%, #93cbff);
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 5px #00ffcf80;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-187188 {
  color: #8b00ff;
  background: linear-gradient(13deg, #007a98, #0fdc91);
  border-radius: 3px;
  font-weight: 600;
}
.username .wh1-cus-username-187297 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-187297 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-187337 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-187337 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-187645 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-187645 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-188021 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188021 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-188249 {
  background-image: linear-gradient(135deg, #ff0000 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188249 {
  color: #ff0000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #0000ff 10%, #ffffff f 70%);
}
.username .wh1-cus-username-188320 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188320 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-188693 {
  background: linear-gradient(250deg, #000000 40%, #c0c0c0 9%);
  -webkit-text-fill-color: transparent;
  text-shadow: 1px 1px 5px #6c8194, 5px 5px 5px rgba(50, 50, 0, 0.45);
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-188693 {
  background: linear-gradient(45deg, #2a2a2a, #3e3e3e);
  color: #9d9d9d;
  text-shadow: 0px 0px 3px #2c2c2c, 0px 0px 0px #2a2424, 0px 0px 0px #555555, 0px -1px 0px #adadad, 0px 1px 0px #595959, 0 0 5px #ffffff;
}
.username .wh1-cus-username-188743 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188743 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-188801 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188801 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-188935 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-188935 {
  color: #f2f1f8;
  font-weight: 600;
  background-image: linear-gradient(1700deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-189053 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-189053 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-190046 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-190046 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-191280 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-191280 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-191522 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-191522 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-192506 {
  background-image: linear-gradient(135deg, #1e90ff, #dda0dd 40%, #7b68ee 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-192506 {
  color: #483D8B;
  font-weight: 600;
  background-image: linear-gradient(135deg, #b0c4de 40%, #1e90ff 100%);
}
.username .wh1-cus-username-192511 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-192511 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-193576 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-193576 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-194285 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-194285 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-195427 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-195427 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-195754 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-195754 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-195808 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-195808 {
  color: #ff0000;
  font-weight: 600;
  background-image: linear-gradient(135deg, #fdc345 10%, #fcaf00 100%);
}
.username .wh1-cus-username-196129 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-196129 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-196150 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-196150 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-196309 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-196309 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-196803 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-196803 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-196940 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-196940 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-198261 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-198261 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-199021 {
  background-image: linear-gradient(1deg, #6ae0a5 10%, #6a6de0 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-199021 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(145deg, #f9cb9c 10%, #9fc5e8 100%);
}
.username .wh1-cus-username-200098 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-200098 {
  color: #FBFBFB;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-200191 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-200191 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-200907 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-200907 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-201571 {
  background-image: linear-gradient(135deg, #000000 40%, #808080 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-201571 {
  color: black;
  font-weight: 600;
  background-image: linear-gradient(135deg, #000000 10%, #808080 90%);
}
.username .wh1-cus-username-202413 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-202413 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-202892 {
  background-image: linear-gradient(90deg, #c680ff 10%, #8d00ff 50%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-202892 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(90deg, #c680ff 10%, #8d00ff 50%);
}
.username .wh1-cus-username-203360 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-203360 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-203434 {
  background: radial-gradient(circle, #8c4777 0%, #ca94b9 30%, #dcafce 51%, #b395aa 18%, #e6b5d7 110%);
  text-shadow: 1px 1px 3px #f7e0ef, 0px 0px 10px #b16e9c, 0px 0px 2px #6d2757, 1px 1px 0px #8a340a 0, 0px 0px 10px #9e6e8f, 0px 0px 2px #8e5e7f;
  -webkit-background-clip: text;
  -webkit-text-fill-color: #FAC9CB;
}
.userBanner.wh1-cus-banner-203434 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-204318 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-204318 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-204688 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-204688 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-205046 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-205046 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-205103 {
  background: linear-gradient(259deg, #000000 40%, #c0c0c0 9%);
  -webkit-text-fill-color: transparent;
  text-shadow: 1px 1px 5px #7b81ff, 5px 5px 5px rgba(50, 50, 0, 0.45);
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-205103 {
  background: linear-gradient(45deg, #2a2a2a, #3e3e3e);
  color: #9d9d9d;
  text-shadow: 0px 0px 3px #2c2c2c, 0px 0px 0px #2a2424, 0px 0px 0px #555555, 0px -1px 0px #adadad, 0px 1px 0px #595959, 0 0 5px #ffffff;
}
.username .wh1-cus-username-206312 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-206312 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-206948 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-206948 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-207419 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-207419 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-208148 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-208148 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-208378 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-208378 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-208617 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-208617 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-208881 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-208881 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-209003 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-209003 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-209074 {
  color: black;
  text-shadow: 0px 0px 3px #fefefe, 0px 0px 4px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe, 0px 0px 5px #fefefe;
  border-radius: 9px;
}
.userBanner.wh1-cus-banner-209074 {
  background: linear-gradient(180deg, #bbbbbb, #353535);
  color: #000000;
  text-shadow: 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff, 0 0 3px #ffffff;
}
.username .wh1-cus-username-210095 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-210095 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-211273 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-211273 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-211801 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-211801 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-212254 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-212254 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-212622 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-212622 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-213200 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-213200 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-213330 {
  color: white;
  text-shadow: 0 0 1px #fff, 0 0 2px #9c9c9c, 0 0 3px #545454, 0 0 4px #000, 0 0 8px #b3029b, 0 0 9px #b3029b, 0 0 10px #b3029b, 0 0 15px #b3029b;
}
.userBanner.wh1-cus-banner-213330 {
  color: #ff80ed;
  background: linear-gradient(13deg, #9d00ff, #4c00ff);
}
.username .wh1-cus-username-214200 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-214200 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-214685 {
  background: linear-gradient(20deg, #000000, #000000 52%, #000000 50%, #000000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 2px #000000;
}
.userBanner.wh1-cus-banner-214685 {
  color: #fff;
  background: linear-gradient(13deg, #000000, #000000);
}
.username .wh1-cus-username-215286 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-215286 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-216050 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-216050 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-216803 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-216803 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-216904 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-216904 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-217005 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-217005 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-218342 {
  color: #fff;
  text-shadow: 0 0 9px rgba(255, 255, 255, 0.5), 0 0 9px rgba(255, 255, 255, 0.5);
  background-image: radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-218342 {
  color: #29292b;
  background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), linear-gradient(-45deg, rgba(0, 0, 0, 0.05) 25%, rgba(0, 0, 0, 0) 25% 50%, rgba(0, 0, 0, 0.05) 50% 75%, rgba(0, 0, 0, 0) 75%), radial-gradient(circle farthest-corner at 11.7% 80.59999999999999%, #f9b9ff 0%, #b1acff 49.3%, #62cbff 89%);
}
.username .wh1-cus-username-218367 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-218367 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-219468 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-219468 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-219851 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-219851 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-220046 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-220046 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-220082 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-220082 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-221727 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-221727 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-222014 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-222014 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-222168 {
  color: #42aaff;
  text-shadow: 0 0 5px #42aaff, 0px 0px 0px #42aaff, 2px 1px 0px #0014ff c7, 0px 1px 5px #1b00ff, -1px 1px 0px #0014ff c7, 1px 0px 0px #0014ff c7, -1px -1px 0px #0014ff c7;
}
.userBanner.wh1-cus-banner-222168 {
  background: #3f5efb;
  background: linear-gradient(90deg, #3f5efb 0%, #42aaff 100%);
}
.username .wh1-cus-username-222218 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-222218 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-223002 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-223002 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-223494 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-223494 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-223535 {
  background: linear-gradient(20deg, #0064ff, #00ff82 0%, #ffffff 50%, #96cbff) padding-box text;
  -webkit-text-fill-color: transparent;
  text-shadow: rgba(0, 200, 200, 0.3) 0px 0px 5px;
  --darkreader-inline-bgcolor: rgba(0, 0, 0, 0);
  --darkreader-inline-bgimage: linear-gradient(20deg, #0055cc, #00cc80 50%, #180a1b 10%, #000c75);
}
.userBanner.wh1-cus-banner-223535 {
  color: #3DFF8CFF;
  font-weight: 650;
}
.username .wh1-cus-username-224448 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-224448 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-224533 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-224533 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-224637 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-224637 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-225177 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-225177 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}
.username .wh1-cus-username-225182 {
  -webkit-text-fill-color: transparent;
  text-shadow: 0px 0px 0px #a9e4f7 , 0px 1px 4px #0fb4e7 , 1px 2px 9px , 0px 0px 9px #a9e4f7 , 0px 1px 0px #0fb4e7;
  -webkit-background-clip: text;
}
.userBanner.wh1-cus-banner-225182 {
  color: #fff;
  background: radial-gradient(circle at 6% -191%, #a9e4f7 31.1%, #0fb4e7 38.1%, transparent 40.7%), radial-gradient(circle at 94% 74%, #ffffff 0.1%, transparent 0.7%), radial-gradient(circle at 46% 20%, #ffffff 0.1%, transparent 0.9%), radial-gradient(circle at 79% 38%, #ffffff 0.1%, transparent 1%), linear-gradient(135deg, #a9e4f7, #0fb4e7);
  border-radius: 5px;
}
.username .wh1-cus-username-226820 {
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.userBanner.wh1-cus-banner-226820 {
  color: #f5f5f5;
  font-weight: 600;
  background-image: linear-gradient(135deg, #ffa8a8 10%, #fcff00 100%);
}