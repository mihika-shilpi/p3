## P3 Peer Review

+ Reviewer's name: Mihika Shilpi
+ Reviwee's name: Patricia Ausman
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/pausman/p3dwa>*

## 1. Interface

+ What are your initial impressions of the site interface?
  + On a UX level, the interface is easy to naviagte. Even without reading the body text I know what to click on and where it is likely to take me. 
  + On an aesthetic level, the website does look a little old HTML. I don't think CSS styling is a major question in this project, but the choice of color-fonts-fixed width blue box makes me want to trust the tool less

+ Were there any parts of the interface that you found confusing, or did not work as you expected?
  + Minor, but I tried multiple times to click ont he little round logo in the top left - either expecting it to open options or take me to the home page. 
  + Once I had correctly filled all fields and hit Encode, I expected the result to show up below the form, or next to it, but not above it. I did it twice before I realised what was going on.

+ Were there any parts of the interface that you thought worked notably well?
  + The homepage makes it very clear what this website is about and what it will let me do, as well as easily offers me two BIG buttons to get to one of the options. 

+ Do you have any suggestions for improvements on the interface?
  + I'd maybe just work on the aesthetic choices, and the chioce of form return / result position. 


## 2. Functional testing

+ Submitting a form without entering any data
  + The form cannnot submit with NO data, since there is a radio button. But for the other fields; the form throws up appropriate errors. 

+ Submitting a form with entering data in only some of the fields
  + Once again, the form throws up appropriate errors and retains all my answers as expected. 

+ Entering some of the following combinations: decimal numbers, negative numbers, letters, symbols, an extremely large number, etc.
  + The number field correctly errors on all inputs - fractions, decimels, out of range values...

+ Numbers in the text field
    + However, the text field takes just numbers. I can imagine that for an entire paragraph of text, one may want to allow numbers, but if I put in just a phone number for example, I get no shift - there is not result. Maybe a minimum of 1 letter should be required?

+ Try and access a URL on their site that likely does not exist (e.g. http://a3.domain.com/asdjfks)
  + Such a cute 404! :)) I want to keep going back 

+ Very long text content
  + The text field also takes an infinitely long amount of text, which might break the processing at some point. however, what woul dbe nice is if the processed text retained line breaks - if I put in two paragraphs; it all strings together in one line of wrapped anwser - the encoded and oiginal text. It would be nice if the two were separate, and the paragraphs kept breaks. 

## 3. Code: Routes
Is there any code in this file that should be happening in a Controller?
  + Nope none at all! I think you could have thrown out the practice root for the final app deployment, but other than that, very clean controllers. Nicely commented too. 

## 4. Code: Views

+ Is template inheritance used?
  + Yes! Quite nicely. 
  + I'm not sure why the navigation needed to be separated from main -- seems like something that could just go into the base layout, since it's hard called there anyway?

+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
  + Everything is nicely separated; and the code is very easy to read as well! 

+ Did they do anything in PHP that could have been done in Blade?
  + EVERYTHING is in blade! :)

+ Did they use any Blade syntax/techniques you were unfamiliar with?
  + None of the syntax was unfamiliar, but I thought Pat's way of separating erros per form field was very neat and concise, as compared to some versions I've seen. Definitely noting it down. 

## 5. Code: General

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
  + Only that at times there are extra line spaces - which may not be great for minified code, but honestly, here, made everything nice to read. 

+ Are there any best practices discussed in course material that you feel were not addressed in the code?
  + I thought the code was really nice to get through actually. Even without documentation I feel like I could work with it without breaking things because variable naming, placement of items and logic flow is very clear. 

+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
  + The code is actually heavily commented not in an overwhelming way, but in an i-never-got-ten-lines before I told where I'm at and what I'm doing way. Nice!

+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
  + Definitely the separation of errors - the class example struck me as ... clumsy; this one was very nicely done using a separate error php file and then a call in. 
  + I also enjoyed reading your controllers that generated the cipher shift - have not used matrices in pHp before, but I do lots of math/data science and this give me thoughts for the final....integration would be cool!

+ Are there any parts of the code that you don't understand?
  + Whatever was new to me -- some conditionals in controllers -- was commented well enough that I understood it upon 1 read. 

## 6. Misc
+ Maybe use your `textToEncode` to fill up the text area again even after submit? Just from a usability point of view, if I notice I made a typo, instead of typing it all again or copy-pasting, I could just have it there to edit? Would be cool! 