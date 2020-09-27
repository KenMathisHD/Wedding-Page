

// $('input:radio[name="size"]').change(
//     function(){
//         sizeT = this.value;
//         selections.sizeID = this.id;
//     }
// );
// $('input:radio[name="crust"]').change(
//     function(){
//         crustT = this.value;
//         selections.crustID = this.id;
//     }
// );
// $('input:radio[name="sauce"]').change(
//     function(){
//         sauceT = this.value;
//         selections.sauceID = this.id;
//     }
// );
// $('input:checkbox[name="extras"]').change(
//     function(){
//         if (this.checked) {
//             extrasL.push(this.value);
//             selections.extrasIDs.push(this.id);
//         }
//         else if (!this.checked) {
//             let entry = this.value;
//             let index = extrasL.indexOf(entry);
//             extrasL.splice(index, 1);
//             selections.extrasIDs.splice(index, 1);
//         }
//     }
// );







// function makeYourPizza() {

//     let temp = [];
//     $.ajax({
//     url: 'index.php?action=getToppings',
//     async: false,
// 	success: function(result) {
// 		try {
// 			json = jQuery.parseJSON(result);
// 		} catch (e) {
// 			showError("Invalid JSON returned from server: " + result);
// 			return;
// 		}
// 		if (json["success"] === "0") {
// 			showError(json["errormsg"]);
// 		} else {
//             listToppings = json.toppings;
// 			$.each(json["toppings"],function(key,value) {
//                 temp.push(value);
//             });
//             toppingsList = temp;
// 		}
// 	},
// 	error: function() {
// 		showError('Error Reaching Server');
// 	}
//     });

//     if (extrasL.length == 0) {
//         extrasL.push('No Extras');
//     }

//     var cPizza = new Pizza(sizeT, crustT, sauceT, toppingsList, extrasL);
//     sendPizza(cPizza);


// }

// function sendPizza(pizzaThing) {
//     let pizza = pizzaThing;
//     $.ajax({
//         url: 'index.php?action=sendpizza',
//         data: {
//             thepizza: JSON.stringify(pizza)
//         },
//         success: function(result) {
//             try {
//                 json = jQuery.parseJSON(result);
//             } catch (e) {
//                 showError("Invalid JSON returned from server: " + result);
//                 return;
//             }
//             if (json['success'] === 0) {
//                 showError(json['errormsg']);
//             }
//             else {
//                 let pizza = showPizza();
//             }
//         },
//         error: function() {
//             showError('Error Reaching index.php');
//         }
//     });
// }

// function showPizza() {
//     let pizza = {};
//     $.ajax({
//         url: 'index.php?action=showPizza',
//         async: false,
//         success: function(result) {
//             try {
//                 json = jQuery.parseJSON(result);
//             } catch (e) {
//                 showError("Invalid JSON returned from server: " + result);
//                 return;
//             }
//             if (json['success'] == 0) {
//                 showError(json['errormsg']);
//             }
//             else {
//                 pizza = JSON.parse(json.pizza);
//                 $('#size').html(pizza.size);
//                 $('#crust').html(pizza.crust);
//                 $('#sauce').html(pizza.sauce);
//                 $("#list-toppings").empty();
//                 $.each(pizza.toppings,function(key,value) {
//                     $("#list-toppings").append("<li id='" + value + "'>" + value + "</li>");
//                 });
//                 $("#list-extras").empty();
//                 $.each(pizza.extras,function(key,value) {
//                     $("#list-extras").append("<li id='" + value + "'>" + value + "</li>");
//                 });
//             }
//         },
//         error: function() {
//             showError('Error Reaching index.php');
//         }
//     });
//     return pizza;
// }

// function currentSBubbles() {
//     for (let i = 0; i < steps.length; i++) {
//         if ($(stepBubbles[i]).hasClass('bubbleBig')) {
//             return i;
//         }
//     }
// }

// function stepUpdater() {
//     let shown = checkStepsStatus();
//     let cBubs = currentSBubbles();
//     $(stepBubbles[cBubs]).removeClass('bubbleBig');
//     $(stepBubbles[shown]).addClass('bubbleBig');
//     if (shown == 0) {
//         $('#last-button').prop('disabled', true);
//     } else if (shown == steps.length-1) {
//         $('#next-button').prop('disabled', true);
//     } else {
//         $('#next-button').prop('disabled', false);
//         $('#last-button').prop('disabled', false);
//     }
// }

// function checkStepsStatus() {
//     for (let i = 0; i < steps.length; i++) {
//         if ($(steps[i]).prop('status') == 'Middle') {
//             return i;
//         }
//     }
// }

// function updateSelections() {
    
//     $.ajax({
//         url: 'index.php?action=updateSelections',
//         data: {
//             selections: JSON.stringify(selections)
//         },
//         success: function(result) {
//             try {
//                 json = jQuery.parseJSON(result);
//             } catch (e) {
//                 showError("Invalid JSON returned from server: " + result);
//                 return;
//             }
//             if (json["success"] === "0") {
//                 showError(json["errormsg"]);
//             }
//         },
//         error: function() {
//             showError('Error Reaching Server');
//         }
//         });
// }

// function showSelections() {
//     let selections = {};
//     $.ajax({
//         url: 'index.php?action=showSelections',
//         success: function(result) {
//             try {
//                 json = jQuery.parseJSON(result);
//             } catch (e) {
//                 showError("Invalid JSON returned from server: " + result);
//                 return;
//             }
//             if (json["success"] === "0") {
//                 showError(json["errormsg"]);
//             }
//             else {
//                 if (json['selections']) {
//                     selections = JSON.parse(json['selections']);
//                     $('#'+selections.sizeID).prop("checked", true);
//                 $('#'+selections.crustID).prop("checked", true);
//                 $('#'+selections.sauceID).prop("checked", true);
//                 let extraArr = selections.extrasIDs;
//                 for (let i = 0; i < extraArr.length; i++) {
//                     $('#'+extraArr[i]).prop("checked", true);
//                 }
//                 $.each(sizeBtns, function () {
//                     let temp = this.getAttribute('id');
//                     if ($('#'+temp).prop('checked')) {
//                         sizeT = this.getAttribute('value');
//                         selections.sizeID = this.getAttribute('id');
//                     }
//                 });
//                 $.each(crustBtns, function () {
//                     let temp = this.getAttribute('id');
//                     if ($('#'+temp).prop('checked')) {
//                         crustT = this.getAttribute('value');
//                         selections.crustID = this.getAttribute('id');
//                     }
//                 });
//                 $.each(sauceBtns, function () {
//                     let temp = this.getAttribute('id');
//                     if ($('#'+temp).prop('checked')) {
//                         sauceT = this.getAttribute('value');
//                         selections.sauceID = this.getAttribute('id');
//                     }
//                 });
//                 $.each(extrasBtns, function () {
//                     let temp = this.getAttribute('id');
//                     if ($('#'+temp).prop('checked')) {
//                         extrasL.push(this.value);
//                         selections.extrasIDs.push(this.id);
//                     }
//                 });

//                 }

//             }
//         },
//         error: function() {
//             showError('Error Reaching Server');
//         }
//         });
// }

// function optionDisabler(option) {
//     let temp = [];
//     for (let i = 0; i < options.length; i++) {
//         temp.push(options[i].value);
//     }
//     let ind = temp.indexOf(option);
//     if (ind > 0) {
//         $(options[ind]).prop('disabled', true);
//     }
//     else {
//         showError("Problem in disabler");
//     }
// }

// function optionEnabler(option) {
//     let temp = [];
//     for (let i = 0; i < options.length; i++) {
//         temp.push(options[i].value);
//     }
//     let ind = temp.indexOf(option);
//     if (ind > 0) {
//         $(options[ind]).prop('disabled', false);
//     }
//     else {
//         showError("Problem in enabler");
//     }
// }
