vcvWebpackJsonp([1],{"./facebookLike/component.js":function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(t,"__esModule",{value:!0});var i=n("./node_modules/babel-runtime/helpers/extends.js"),a=o(i),l=n("./node_modules/babel-runtime/core-js/object/get-prototype-of.js"),s=o(l),c=n("./node_modules/babel-runtime/helpers/classCallCheck.js"),r=o(c),u=n("./node_modules/babel-runtime/helpers/createClass.js"),d=o(u),f=n("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js"),m=o(f),v=n("./node_modules/babel-runtime/helpers/inherits.js"),p=o(v),b=n("./node_modules/react/react.js"),k=o(b),h=n("./node_modules/vc-cake/index.js"),g=o(h),y=g["default"].getService("api"),x=(g["default"].getService("cook"),function(e){function t(e){(0,r["default"])(this,t);var n=(0,m["default"])(this,(t.__proto__||(0,s["default"])(t)).call(this,e));return n.timerIndex=0,n.state={status:""},n}return(0,p["default"])(t,e),(0,d["default"])(t,[{key:"componentDidMount",value:function(){this.insertHtml(this.props.atts)}},{key:"componentWillReceiveProps",value:function(e){var t=this.props.atts,n=t.layout,o=t.size;n===e.atts.layout&&o===e.atts.size||this.insertHtml(e.atts)}},{key:"componentWillUnmount",value:function(){window.clearTimeout(this.checkVisibilityTimer),window.clearTimeout(this.checkIfRenderedTimer)}},{key:"insertHtml",value:function(e){var t=this.createHtml(e),n=this.refs.facebookLikeInner;this.updateInlineHtml(n,t),this.reloadScript(),this.setPlaceholder()}},{key:"setPlaceholder",value:function(){var e=this.getDomNode().querySelector(".fb-like"),t=(e.getAttribute("fb-xfbml-state"),document.createElement("vcvhelper"));t.className="vce-facebook-like-placeholder",this.refs.facebookLikeInner.appendChild(t);var n=this.getDomNode().querySelector(".vce-facebook-like-placeholder");e.style.position="absolute",e.style.opacity="0",this.checkIfRendered(n,e,!0)}},{key:"checkIfRendered",value:function(e,t,n){var o=this,i=t.getAttribute("fb-xfbml-state"),a=t.querySelector("span");if("rendered"!==i){var l=n?500:50;"loading"!==this.state.status&&(e.innerHTML='<span class="vcv-ui-icon vcv-ui-wp-spinner"></span>',this.setState({status:"loading"})),this.checkIfRenderedTimer=setTimeout(function(){o.checkIfRendered(e,t,!1)},l)}else setTimeout(function(){o.setState({status:"rendered"}),e.innerHTML="";var n=o.checkIfVisible(a);if(n)t.style.position=null,t.style.opacity=null,e.innerHTML="";else{var i=o.getPublicImage("facebook-like-placeholder.png");e.innerHTML='<img src="'+i+'" />',o.timerIndex=0,o.checkVisibilityTimer=setTimeout(function(){o.removePlaceholder(t,e)},500)}},500)}},{key:"removePlaceholder",value:function(e,t){var n=this;this.timerIndex++,this.timerIndex>4||(this.checkIfVisible(e.querySelector("span"))?(e.style.position=null,e.style.opacity=null,t.innerHTML=""):setTimeout(function(){n.removePlaceholder(e,t)},500))}},{key:"checkIfVisible",value:function(e){return!(null===e||0===e.offsetHeight||0===e.offsetWidth)}},{key:"reloadScript",value:function(){var e=document.querySelector("#vcv-editor-iframe").contentWindow;e.FB&&e.FB.init({status:!0,xfbml:!0,version:"v2.8"})}},{key:"createHtml",value:function(e){var t=e.layout,n=e.size,o=window.vcvPostPermanentLink,i="<script>(function(d, s, id) {\n  if(d.getElementById('fb-root')) return;\n  var fbRoot = d.createElement('div');\n  fbRoot.id = 'fb-root';\n  document.getElementsByTagName('body')[0].appendChild(fbRoot);\n\tvar js, fjs = d.getElementsByTagName(s)[0];\n\tif (d.getElementById(id)) return;\n\tjs = d.createElement(s); js.id = id;\n\tjs.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8\";\n\tfjs.parentNode.insertBefore(js, fjs);\n}(document, 'script', 'facebook-jssdk'));</script>",a='<div class="fb-like" data-href="'+o+'" data-layout="'+t+'" data-action="like" data-size="'+n+'" data-show-faces="false" data-share="false"></div>';return i+a}},{key:"getPublicImage",value:function(e){var t=this.props.atts.metaAssetsPath;return e?e.match("^(https?:)?\\/\\/?")?e:t+e:""}},{key:"render",value:function(){var e=this.props,t=e.id,n=e.atts,o=e.editor,i=n.customClass,l=n.alignment,s=n.metaCustomId,c="vce-facebook-like",r="vce-facebook-like-inner vce",u={};i&&(c+=" "+i),l&&(c+=" vce-facebook-like--align-"+l),s&&(u.id=s);var d=this.applyDO("all");return k["default"].createElement("div",(0,a["default"])({},u,{className:c},o),k["default"].createElement("div",(0,a["default"])({className:r,ref:"facebookLikeInner",id:"el-"+t},d),"Facebook Like"))}}]),t}(y.elementComponent));t["default"]=x},0:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{"default":e}}var i=n("./node_modules/vc-cake/index.js"),a=o(i),l=n("./facebookLike/component.js"),s=o(l),c=a["default"].getService("cook").add;c(n("./facebookLike/settings.json"),function(e){e.add(s["default"])},{css:n("./node_modules/raw-loader/index.js!./facebookLike/styles.css"),editorCss:n("./node_modules/raw-loader/index.js!./facebookLike/editor.css")},"")},"./facebookLike/settings.json":function(e,t){e.exports={designOptions:{type:"designOptions",access:"public",value:{},options:{label:"Design Options"}},editFormTab1:{type:"group",access:"protected",value:["layout","size","alignment","metaCustomId","customClass"],options:{label:"General"}},metaEditFormTabs:{type:"group",access:"protected",value:["editFormTab1","designOptions"]},relatedTo:{type:"group",access:"protected",value:["General"]},customClass:{type:"string",access:"public",value:"",options:{label:"Extra class name",description:"Add an extra class name to the element and refer to it from Custom CSS option."}},layout:{type:"dropdown",access:"public",value:"standard",options:{label:"Layout",values:[{label:"Standard",value:"standard"},{label:"Box Count",value:"box_count"},{label:"Button Count",value:"button_count"},{label:"Button",value:"button"}]}},size:{type:"buttonGroup",access:"public",value:"small",options:{label:"Size",values:[{label:"Small",value:"small",text:"S"},{label:"Large",value:"large",text:"L"}]}},assetsLibrary:{access:"public",type:"string",value:["animate"]},alignment:{type:"buttonGroup",access:"public",value:"left",options:{label:"Alignment",values:[{label:"Left",value:"left",icon:"vcv-ui-icon-attribute-alignment-left"},{label:"Center",value:"center",icon:"vcv-ui-icon-attribute-alignment-center"},{label:"Right",value:"right",icon:"vcv-ui-icon-attribute-alignment-right"}]}},metaDisableInteractionInEditor:{type:"toggle",access:"protected",value:!0},metaCustomId:{type:"customId",access:"public",value:"",options:{label:"Element ID",description:"Apply unique Id to element to link directly to it by using #your_id (for element id use lowercase input only)."}},tag:{access:"protected",type:"string",value:"facebookLike"}}},"./node_modules/raw-loader/index.js!./facebookLike/editor.css":function(e,t){e.exports='[data-vcv-element-disable-interaction="true"] .vce-facebook-like-inner {\n  position: relative;\n}\n\n[data-vcv-element-disable-interaction="true"] .vce-facebook-like-inner::after {\n  content: "";\n  position: absolute;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 999;\n}\n\n.vce-facebook-like {\n  min-height: 1em;\n}\n'},"./node_modules/raw-loader/index.js!./facebookLike/styles.css":function(e,t){e.exports=".vce-facebook-like {\n  line-height: 1;\n}\n\n.vce-facebook-like iframe {\n  display: block;\n  vertical-align: top;\n  max-width: 100%;\n}\n\n.vce-facebook-like--align-center {\n  text-align: center;\n}\n\n.vce-facebook-like--align-right {\n  text-align: right;\n}\n\n.vce-facebook-like--align-left {\n  text-align: left;\n}\n\n.vce-facebook-like-inner {\n  vertical-align: top;\n  display: inline-block;\n  max-width: 100%;\n  overflow: hidden;\n}\n\n.vce-facebook-like-inner div {\n  max-width: 100%;\n}\n\n.vce-facebook-like-inner > * {\n  margin: 0;\n}"}});