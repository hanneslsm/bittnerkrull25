/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/block-styles.js":
/*!*****************************!*\
  !*** ./src/block-styles.js ***!
  \*****************************/
/***/ (() => {

/** Register Block Styles
 * --------------------------------------------- */

/**
 * Core Cover
 */
wp.blocks.registerBlockStyle('core/cover', {
  name: 'cover--bittnerkrull-vorteile',
  label: 'BK Vorteile'
});
wp.blocks.registerBlockStyle('core/cover', {
  name: 'cover--bittnerkrull-produkte',
  label: 'BK Produkte'
});

/**
 * Core Details
 */
wp.blocks.registerBlockStyle('core/details', {
  name: 'details-plus',
  label: 'Plus style'
});

/**
 * Core Group
 */
wp.blocks.registerBlockStyle('core/group', {
  name: 'group-spotlight',
  label: 'Hover: Spotlight'
});
wp.blocks.registerBlockStyle('core/group', {
  name: 'group--bittnerkrull-logo-wall',
  label: 'BK Logo Wall'
});

/**
 * Core Image
 */
wp.blocks.registerBlockStyle('core/image', {
  name: 'image--bittnerkrull-screenshot',
  label: 'BK Screenshot'
});

/***/ }),

/***/ "./src/block-variations.js":
/*!*********************************!*\
  !*** ./src/block-variations.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/** Register Block Variations
 * --------------------------------------------- */


/**
 * Core Sapcer
 */
wp.blocks.registerBlockVariation('core/spacer', {
  name: 'spacer',
  title: 'Spacer',
  isDefault: true,
  attributes: {
    height: 'var:preset|spacing|40'
  }
});

/***/ }),

/***/ "./src/js/core-group.js":
/*!******************************!*\
  !*** ./src/js/core-group.js ***!
  \******************************/
/***/ (() => {

/** Spotlight Effect */

document.addEventListener("DOMContentLoaded", function () {
  const gradient = document.querySelector(".is-style-group-spotlight");

  // Ensure the element exists before adding event listeners and manipulating styles
  if (gradient) {
    function onMouseMove(event) {
      gradient.style.backgroundImage = "radial-gradient(at " + event.clientX + "px " + event.clientY + "px, rgba(24, 93, 106, 0) 0, #1F3A47 70%)";
    }

    // Add the mousemove event listener only if the element exists
    document.addEventListener("mousemove", onMouseMove);
  }
});
console.log("Hello Script!");

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***********************!*\
  !*** ./src/global.js ***!
  \***********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _block_styles_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./block-styles.js */ "./src/block-styles.js");
/* harmony import */ var _block_styles_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_block_styles_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _block_variations_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./block-variations.js */ "./src/block-variations.js");
/* harmony import */ var _js_core_group_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/core-group.js */ "./src/js/core-group.js");
/* harmony import */ var _js_core_group_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_core_group_js__WEBPACK_IMPORTED_MODULE_2__);
/**
 * global.js is loaded for both frontend and editor.
 */

/* Import Custom Block Styles & Block Variations */



})();

/******/ })()
;
//# sourceMappingURL=global.js.map