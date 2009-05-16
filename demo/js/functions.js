/**
 * Example Functions Javacript File
 */
function testFunction(someArray, someObject) {
  var message = [];
  
  if (someArray != undefined || someArray.constructor == Array)
    message.push('Array loaded and found.');
  
  if (someObject != undefined || someObject.constructor == Object) 
    message.push('Object loaded and found.');
  
  if (!message.length) 
    message.push('No Object or Array found');
    
  return message.join(' ');
}