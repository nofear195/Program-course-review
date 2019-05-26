## CSS  Selector
name|selector|description|example
---|---|---|---
Type Selector  | A |Selects all elements of type A   |  `div` selects all `<div>` elements
ID Selector  |#id   | Selects the element with a specific id  | `#cool` selects any element with `id="cool"`
Descendant Selector  |A B   | Selects all B inside of A. B is called a descendant because it is inside of another element  |  `p strong` selects all `<strong>` elements that are inside of any `<p>`
-  |  #id  A | Combine any selector with the descendent selector.|  `#fancy span` selects any `<span>` elements that are inside of the element with `id="fancy"`
Class Selector  | .classname  |Select elements by their class   |`.neato` selects all elements with `class="neato"`
-  |A.className  | Combine the class selector with other selectors, like the type selector  |`ul.important` selects all `<ul>` elements that have `<class="important">`
 Comma Combinator|A, B |Combine any selectors this way, and  specify more than two |`a, p, div` selects all `<a>`, `<p>` and `<div>` elements
  The Universal Selector|  * |  Select all elements |
-  | A  *  | Combine the Universal Selector  | `p *` selects any element inside all p elements
Adjacent Sibling Selector  | A + B  | Selects all B elements that directly follow A  |  `div + a` selects every `<a>` element that directly follows a `<div>`
General Sibling Selector  |A ~ B   | Selects all siblings of an element that follow A |  `A ~ B` selects all B that follow a A
Child Selector  |A > B   | Selects elements that are direct children of other elements. A child element is any element that is nested directly in another element.   |  `A > B` selects all B that are a direct children A
First Child Pseudo-selector  |:first-child   | Selects a first child element inside of another element  |  `:first-child` selects all first child elements
-  |A:first-child   |Combine the First Child Selector   |  `div p:first-child` selects all first child `<p>` elements that are in a `<div>`
Only Child Pseudo-selector  |:only-child  | Selects any element that is the only element inside of another one   |  `span:only-child` selects the `<span>` elements that are the only child of some other element
Last Child Pseudo-selector  | :last-child  | Selects an element that is the last child element inside of another element   | `span:last-child` selects all last-child `<span>` elements
Nth Child Pseudo-selector  |:nth-child(A)   | Selects the nth (Ex: 1st, 3rd, 12th etc.) child element in another element.  | `div p:nth-child(2)` selects the second `<p>` in every `<div>`
Nth Last Child Selector  |:nth-last-child(A)   | Selects the children from the bottom of the parent  |  `:nth-last-child(2)` selects all second-to-last child elements
First of Type Selector  | :first-of-type  | Selects the first element of that type within another element  |  `span:first-of-type` selects the first `<span>` in any element
Nth of Type Selector  |:nth-of-type(A)   |Selects a specific element based on its type and order in another element - or even or odd instances of that element   |``.example:nth-of-type(odd)`` selects all odd instances of a the example class.
Nth-of-type Selector with Formula  | :nth-of-type(An+B)  | Selects every nth element, starting the count at a specific instance of that element  |`span:nth-of-type(6n+2)` selects every 6th instance of a span, starting from (and including) the second instance.
Only of Type Selector| :only-of-type  |Selects the only element of its type within another element   |   `p span:only-of-type` selects a `<span>` within any `<p>` if it is the only `<span>` in there.
Last of Type Selector| :last-of-type  | Selects each last element of that type within another element  | `div:last-of-type` selects the last `<div>` in every element
Empty Selector  | :empty  | Selects elements that don't have any other elements inside of them  |  `div:empty` selects all empty `<div>` elements
Negation Pseudo-class  | :not(X)  |Selects all elements that do not match selector "X"   |  `div:not(:first-child)` selects every `<div>` that is not a first child
Attribute Selector  |[attribute]   |Selects all elements that have a specific attribute.. An attribute does not always have a value, it can be blank!   |  `[value]` selects all elements that have a value="anything" attribute.
-  |A[attribute]   |Combine the attribute selector with another selector   | `a[href]` selects all `<a>` elements that have a href="anything" attribute
Attribute Value Selector  |[attribute="value"]   | Attribute selectors are case sensitive, each character must match exactly  | `input[type="checkbox"]` selects all checkbox input elements
Attribute Starts With Selector  | [attribute^="value"]  | Select all elements with an attribute value that starts with specific characters |  `.toy[category^="Swim"]` selects elements with class toy and either category="Swimwear or category="Swimming"
Attribute Ends With Selector  | [attribute$="value"]  | Select all elements with an attribute value that ends with specific characters |  `img[src$=".jpg"]` selects all images display a `.jpg` image
Attribute Wildcard Selector  | [attribute*="value"]  |Select all elements with an attribute value that contains specific characters anywhere| `[class*="heading"]` selects all elements with "heading" in their class, like class="main-heading" and class="sub-heading" 
