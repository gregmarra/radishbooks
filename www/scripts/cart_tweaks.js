function googlecartBeforeAdd(item) {
    //Get all the attributes of the item added to cart        
    var attribs = item.getCustomAttributes();
    for (var i in attribs) {
        //Obtain attributes with values
        //and use attribute name: value for text value
        if (attribs[i] != "") {
            var attr_words = i.split("_");
            for (var j=0 ; j < attr_words.length ; j++){
                 var attr_testwd = attr_words[j];
                 var attr_firLet = attr_testwd.substr(0,1);
                 var attr_rest = attr_testwd.substr(1, attr_testwd.length -1)
                 attr_words[j] = attr_firLet.toUpperCase() + attr_rest
            }
            var pretty_attr_name = attr_words.join(" ")
            var attr_val = pretty_attr_name + ": " + attribs[i];
            item.setCustomAttribute(i, attr_val);
        }
    }
    return true;
}