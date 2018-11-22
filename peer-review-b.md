## P3 Peer Review

+ Reviewer's name: Mihika Shilpi
+ Reviwee's name: Stacy Schermann
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/1234tech/p3>*

## 1. Interface

+ What are your initial impressions of the site interface?
  + A little drab. CSS / styling isn't integral to the class, but I think you could have gone beyond the almost default HTML form. 
  + I don't see a feedback form...I expect a text-area, not a word-area

+ Were there any parts of the interface that you found confusing, or did not work as you expected?
  + A word-sized feedback space.
  + What is this feedback for? Why / what do I want to be contacted about it? I know it's a proof of concept, but it isn't really even pretending to be real
  + Why email but not my name?

+ Were there any parts of the interface that you thought worked notably well?
  + For whatever it's worth, easy to read. 

+ Do you have any suggestions for improvements on the interface?
  + Maybe don't have the page subtitle be a note to instructor?
  + Overall, pretend this is real more?

## 2. Functional testing

+ Submitting a form without entering any data
  + The form throws up errors for the two required fields

+ Submitting a form with entering data in only some of the fields
  + Once again, the form throws up an appropriate error and retains my answer as expected. 
  + Does not retain checkbox value...is this intentional?

+ Entering a non-email-address.
  + The email field correctly errors on other inputs - numbers, words...

+ Numbers in the text field
    + However, the text field takes just numbers. I can imagine that for an entire paragraph of text, one may want to allow numbers, but if I put in just a phone number for example, I get no shift - there is not result. Maybe a minimum of 1 letter should be required?

+ Try and access a URL on their site that likely does not exist (e.g. http://a3.domain.com/asdjfks)
  + Standard 404 

+ Notes though:
  + The textarea field doesn't scroll if I type more than the 2-3 words that fit
  + All errors are showing up double - near the field and then again below the form. Why?

## 3. Code: Routes
Is there any code in this file that should be happening in a Controller?
  + Nope. 
  + I don't understand your comment though

## 4. Code: Views

+ Is template inheritance used?
  + Yes...technically. 
  + It doesn't use the principle of template inheritence in that the main layout hard calls the specific page content, rather than just content in general. So there's sort of no point to the inheritence...

+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
  + Everything is nicely separated

+ Did they do anything in PHP that could have been done in Blade?
  + Everything is in blade

+ Did they use any Blade syntax/techniques you were unfamiliar with?
  + None of the syntax was unfamiliar. 

## 5. Code: General

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
  + The code is styled to standards

+ Are there any best practices discussed in course material that you feel were not addressed in the code?
  + I found some of the code structure confusing...the way layouts / views were used? There's still Laravel template files in the views, as well as Laravel CSS...not sure why. And the view themselves use a bunch of yields separately when I think there could have been just a `content` yield...

+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
  + The code is simple enough, so without comments I can still figure out what is going on. But comments would have made it easier to follow for sure!

## 6. Misc
+ I think that even if the project was simple, it might have been nice to bother with something simple like the submit message calling me by my name rather than email ID. Making it a little more...believable, even if it was a field above the required. 