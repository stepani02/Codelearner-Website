const quizData = [
  {
      question: "Which language runs in a web browser?",
      a: "Java",
      b: "C",
      c: "Python",
      d: "javascript",
      correct: "d",
  },
  {
      question: "What does CSS stand for?",
      a: "Central Style Sheets",
      b: "Cascading Style Sheets",
      c: "Cascading Simple Sheets",
      d: "Cars SUVs Sailboats",
      correct: "b",
  },
  {
      question: "What does HTML stand for?",
      a: "Hypertext Markup Language",
      b: "Hypertext Markdown Language",
      c: "Hyperloop Machine Language",
      d: "Helicopters Terminals Motorboats Lamborginis",
      correct: "a",
  },
  {
      question: "What year was JavaScript launched?",
      a: "1996",
      b: "1995",
      c: "1994",
      d: "none of the above",
      correct: "b",
  },

  {
    question: "Who invented the World Wide Web (WWW)?",
    a: "Steve Jobs",
    b: "Tim Berners-Lee",
    c: "Bill Gates",
    d: "Mark Zuckerberg",
    correct: "b",
  },

  {
    question: "What does the <html> element represent in an HTML page?",
    a: "It defines a section of text as a hyperlink.",
    b: "It specifies the background color of the page.",
    c: "It is used for creating ordered lists.",
    d: "It is the root element that defines the whole HTML document.",
    correct: "d",
  },

  {
    question: "What is the main purpose of a web browser?",
    a: "To create web pages using HTML and CSS",
    b: "To read HTML documents and display them correctly",
    c: "To store and manage databases on the web",
    d: "To provide security for websites",
    correct: "b",
  },

  {
    question: "What content will be displayed in a web browser?",
    a: "The content inside the <script> section",
    b: "The content inside the <head> section",
    c: "The content inside the <body> section",
    d: "The content inside the <footer> section",
    correct: "c",
    },

  {
    question: "How are HTML links defined?",
    a: "With the <link> tag",
    b: "With the <a> tag",
    c: "With the <ul> tag",
    d: "With the <img> tag",
    correct: "b",
  },
  
  {
    question: "What is the purpose of the <br> tag in HTML?",
    a: "It defines a thematic break in the page.",
    b: "It defines a line break and is an empty element without a closing tag.",
    c: "It is used to embed an image in the page.",
    d: "It is used to create a block-level element.",
    correct: "b",
  },

  {
    question: "Are HTML tags case sensitive?",
    a: "Yes",
    b: "No ",
    c: "Only for empty elements",
    d: "Only for block-level elements",
    correct: "b",
  },

  {
    question: "What does the <img> tag do in HTML?",
    a: "It defines a table row.",
    b: "It embeds an image in the page.",
    c: "It creates a line break.",
    d: "It defines a hyperlink.",
    correct: "b",
  },

  {
    question: "What does the 'alt' attribute of the <img> tag do?",
    a: "It defines the background color of the image.",
    b: "It specifies the size of the image.",
    c: "It provides an alternate text for the image if it cannot be displayed.",
    d: "It defines a hyperlink for the image.",
    correct: "c",
  },

  {
    question: "What is the purpose of the 'style' attribute in HTML?",
    a: "It adds a link to an external CSS file.",
    b: "It defines a section that is quoted from another source.",
    c: "It adds styles to an element, such as color, font, size, and more.",
    d: "It provides contact information for the author/owner of a document or an article.",
    correct: "c",
  },

  {
    question: "Which attribute defines some extra information about an HTML element?",
    a: "The 'href' attribute",
    b: "The 'src' attribute",
    c: "The 'alt' attribute",
    d: "The 'title' attribute",
    correct: "d",
  },

  {
    question: "What are the most common quotes used around attribute values in HTML?",
    a: "Single quotes (' ')",
    b: "Double quotes (' ')",
    c: "Square brackets ([ ])",
    d: "Curly braces ({ })",
    correct: "b",
  },

  {
    question: "What does the <hr> tag define in HTML?",
    a: "It defines a line break.",
    b: "It creates a thematic break in the page.",
    c: "It is used to embed an image.",
    d: "It marks up a part of a text.",
    correct: "b",
  },

  {
    question: "What does the <pre> element define in HTML?",
    a: "It defines preformatted text. ",
    b: "It creates a link between a document and an external resource.",
    c: "It is used to mark up a part of a text.",
    d: "It defines predator text",
    correct: "a",
  },

  {
    question: "What does the <blockquote> element define in HTML?",
    a: "A line break",
    b: "A thematic break",
    c: "A section that is quoted from another source ",
    d: "The contact information for the author/owner of a document or an article",
    correct: "c",
  },

  {
    question: "What does the <blockquote> element define in HTML?",
    a: "A line break",
    b: "A thematic break",
    c: "A section that is quoted from another source ",
    d: "The contact information for the author/owner of a document or an article",
    correct: "c",
  },

  {
    question: "What does the <address> tag do in HTML?",
    a: "It defines preformatted text.",
    b: "It creates a link between a document and an external resource.",
    c: "It provides contact information for the author/owner of a document or an article. ",
    d: "It marks up a part of a text.",
    correct: "c",
  },

  {
    question: "What does the <cite> tag define in HTML?",
    a: "The title of a creative work (e.g., a book, a poem, a song, a movie, a painting, a sculpture, etc.)",
    b: "A thematic break in the page.",
    c: "The contact information for the author/owner of a document or an article.",
    d: "The path (URL) to an image.",
    correct: "a",
  },

  {
    question: "What does BDO stand for in HTML?",
    a: "Bi-Directional Orientation",
    b: "Bi-Directional Override ",
    c: "Binary Document Object",
    d: "Basic Document Output",
    correct: "b",
  },

  {
    question: "Are HTML comments displayed in the browser?",
    a: "Yes, as regular text",
    b: "Yes, as hidden text",
    c: "No, they are completely invisible",
    d: "No, but they can help document the HTML source code ",
    correct: "d",
  },

  {
    question: "How can you link an external CSS file to an HTML document?",
    a: "By using the <style> element in the <head> section",
    b: "By using the <link> element ",
    c: "By using the <a> element with a specific attribute",
    d: "By using the <connect> element",
    correct: "b",
  },
  
  {
    question: "What is the most important attribute of the <a> element for creating hyperlinks?",
    a: "The 'src' attribute",
    b: "The 'me' attribute",
    c: "The 'href' attribute ",
    d: "The 'style' attribute",
    correct: "c",
  },
  
  {
    question: "What does the <img> tag represent in HTML?",
    a: "A table cell",
    b: "A hyperlink",
    c: "An image embedded in the page",
    d: "An imagination",
    correct: "c",
  },
  
  {
    question: "How is each table cell defined in HTML?",
    a: "With a <table> and </table> tag",
    b: "With a <tr> and </tr> tag",
    c: "With a <td> and </td> tag ",
    d: "With a <tc> and </tc> tag",
    correct: "c",
  },
  
  {
    question: "How is each table row defined in HTML?",
    a: "With a <div> and </div> tag",
    b: "With a <ul> and </ul> tag",
    c: "With a <tr> and </tr> tag ",
    d: "With a <li> and </li> tag",
    correct: "c",
  },

  {
    question: "How is an unordered list defined in HTML?",
    a: "With the <ul> tag ",
    b: "With the <ol> tag",
    c: "With the <unordered> tag",
    d: "With the <un-li> tag",
    correct: "a",
  },

  {
    question: "How is an ordered list defined in HTML?",
    a: "With the <ul> tag",
    b: "With the <ol> tag",
    c: "With the <ordered> tag",
    d: "With the <on-li> tag",
    correct: "b",
  },

  {
    question: "What is a characteristic of a block-level element in HTML?",
    a: "It takes up the full width available and starts on a new line.",
    b: "It is used to define preformatted text.",
    c: "It is an inline container used to mark up a part of a text.",
    d: "It only takes up as much width as necessary.",
    correct: "a",
  },

  {
    question: "What is a characteristic of an inline element in HTML?",
    a: "It takes up the full width available and starts on a new line.",
    b: "It is used to define preformatted text.",
    c: "It is an inline container used to mark up a part of a text.",
    d: "It only takes up as much width as necessary.",
    correct: "d",
  },

  {
    question: "How is the <div> element commonly used in HTML?",
    a: "To define a thematic break in the page.",
    b: "As a cabinet",
    c: "As a container for other HTML elements.",
    d: "To create a link between a document and an external resource.",
    correct: "c",
  },

  {
    question: "What is the purpose of the <span> element in HTML?",
    a: "To define a section that is quoted from another source.",
    b: "To create a thematic break in the page.",
    c: "To embed an image in the page.",
    d: "To mark up a part of a text or a part of a document.",
    correct: "d",
  },

  {
    question: "What is the syntax for an HTML comment?",
    a: "<!-- This is a comment -->",
    b: "->>> This is a comment <<<-",
    c: "!!This is a comment!!",
    d: "<c>This is a comment</c>",
    correct: "a",
  },
  
  {
    question: "What does CSS stand for?",
    a: "Cascading Sheets Style",
    b: "Creative Style Sheets",
    c: "Cascading Style Sheets",
    d: "Creative Style System",
    correct: "c",
  },

  {
    question: "How can you add inline styles to an HTML element?",
    a: "By using the <style> element in the <head> section",
    b: "By using the <inline> element",
    c: "By using the 'style' attribute inside HTML elements",
    d: "By using the <sty> element",
    correct: "c",
  },

  {
    question: "How can you add internal styles to an HTML document?",
    a: "By using the <style> element in the <head> section",
    b: "By using the <link> element",
    c: "By using the 'style' attribute inside HTML elements",
    d: "By using the <div> element",
    correct: "a",
  },

  {
    question: "How can you link an external CSS file to an HTML document?",
    a: "By using the <external> element in the <head> section",
    b: "By using the <link> element",
    c: "By using the 'style' attribute inside HTML elements",
    d: "By using the <insert> element",
    correct: "b",
  },

  {
    question: "What is the purpose of the <link> element in HTML?",
    a: "To create a hyperlink",
    b: "To define the style of an element",
    c: "To link an external resource",
    d: "To define preformatted text",
    correct: "c",
  },

  {
    question: "What is the most important attribute of the <a> element for creating hyperlinks?",
    a: "The 'src' attribute",
    b: "The 'alt' attribute",
    c: "The 'href' attribute",
    d: "The 'style' attribute",
    correct: "c",
  },

  {
    question: "How can you specify where to open the linked document when using the <a> element?",
    a: "With the 'location' attribute",
    b: "With the 'href' attribute",
    c: "With the 'target' attribute",
    d: "With the 'open' attribute",
    correct: "c",
  },

  {
    question: "How is each table cell defined in HTML?",
    a: "With a <table> and </table> tag",
    b: "With a <tr> and </tr> tag",
    c: "With a <td> and </td> tag",
    d: "With an <mesa> tag",
    correct: "c",
  },

  {
    question: "What is the purpose of HTML classes?",
    a: "To style elements with CSS",
    b: "To create functions in JavaScript",
    c: "To link to other web pages",
    d: "To create forms",
    correct: "a",
  },

  {
    question: "Can multiple HTML elements share the same class?",
    a: "Yes ",
    b: "No",
    c: "Only if they are the same type of element",
    d: "Only if they are in the same div",
    correct: "a",
  },

  {
    question: "What is the purpose of the HTML id attribute?",
    a: "To create a unique identifier for an element",
    b: "To style elements with CSS",
    c: "To create links to other web pages",
    d: "Both a and b ",
    correct: "d",
  },

  {
    question: "Can more than one element have the same id in an HTML document?",
    a: "Yes",
    b: "No ",
    c: "Only if they are the same type of element",
    d: "Only if they are in the same div",
    correct: "b",
  },

  {
    question: "What is an HTML iframe used for?",
    a: "To display a web page within a web page",
    b: "To create a border around an element",
    c: "To create a form",
    d: "To link to other web pages",
    correct: "a",
  },

  {
    question: "How can you specify the size of an iframe?",
    a: "With the height and width attributes",
    b: "With the size attribute",
    c: "With the dimensions attribute",
    d: "With the scale attribute",
    correct: "a",
  },

  {
    question: "What is the purpose of the HTML script tag?",
    a: "To define a client-side script (JavaScript)",
    b: "To style elements with CSS",
    c: "To create links to other web pages",
    d: "To create forms",
    correct: "a",
  },

  {
    question: "How can JavaScript change the content of an HTML element?",
    a: "With the changeContent method",
    b: "With the alterContent method",
    c: "With the modifyContent method",
    d: "With the innerHTML property ",
    correct: "d",
  },

  {
    question: "What is the syntax to select an element with a specific id in JavaScript?",
    a: "document.getElement(id)",
    b: "document.getElementById(id) ",
    c: "document.selectElementById(id)",
    d: "document.pickElementById(id)",
    correct: "b",
  },

  {
    question: "What is the syntax for defining a class in CSS?",
    a: ".classname { }",
    b: "#classname { }",
    c: "classname { }",
    d: "*classname { }",
    correct: "a",
  },
  
  {
    question: "What is the syntax for defining an id in CSS?",
    a: ".idname { }",
    b: "#idname { } ",
    c: "idname { }",
    d: "*idname { }",
    correct: "b",
  },

  {
    question: "How can you remove the border of an iframe?",
    a: "With the border:none; style",
    b: "With the border:0; style ",
    c: "With the noBorder attribute",
    d: "With the borderless attribute",
    correct: "b",
  },

  {
    question: "How can you change the size, style, and color of an iframe's border?",
    a: "With the border attribute",
    b: "With the border-style attribute",
    c: "With the border-size attribute",
    d: "With the style attribute and CSS border property ",
    correct: "d",
  },

  {
    question: "How can an iframe be used as the target frame for a link?",
    a: "The target attribute of the link must refer to the name attribute of the iframe",
    b: "The target attribute of the link must refer to the id attribute of the iframe",
    c: "The target attribute of the link must refer to the class attribute of the iframe",
    d: "The target attribute of the link must refer to the src attribute of the iframe ",
    correct: "d",
  },

  {
    question: "What does the noscript tag in HTML do?",
    a: "It defines an alternate content for users that do not support client-side scripts",
    b: "It hides scripts from older browsers",
    c: "It prevents scripts from running",
    d: "It comments out scripts",
    correct: "a",
  },

  {
    question: "How can JavaScript change the style of an HTML element?",
    a: "With the style property",
    b: "With the changeStyle method",
    c: "With the alterStyle method",
    d: "With the modifyStyle method",
    correct: "a",
  },

  {
    question: "How can JavaScript change an attribute of an HTML element?",
    a: "With the changeAttribute method",
    b: "With the alterAttribute method",
    c: "With the modifyAttribute method",
    d: "With the attribute property",
    correct: "d",
  },

  {
    question: "Can a single HTML element have both a class and an id?",
    a: "Yes",
    b: "No",
    c: "Only if the class and id have the same name",
    d: "Only if the class and id have different names",
    correct: "a",
  },

  {
    question: "Can a single HTML element have multiple classes?",
    a: "Yes",
    b: "No",
    c: "Only if the classes have the same name",
    d: "Only if the classes have different names",
    correct: "a",
  },

  {
    question: "Can a single HTML element have multiple ids?",
    a: "Yes",
    b: "No",
    c: "Only if the ids have the same name",
    d: "Only if the ids have different names",
    correct: "b",
  },

  {
    question: "An absolute file path in HTML refers to:",
    a: "The position of the file relative to the current page",
    b: "The position of the file relative to the root",
    c: "The position of the file relative to the CSS file",
    d: "The position of the file relative to the JavaScript file",
    correct: "b",
  },

  {
    question: "The <base> element in HTML is used to:",
    a: "Specify the base URL for all relative URLs in a page",
    b: "Set the base color for the webpage",
    c: "Set the base font for the webpage",
    d: "Set the base layout for the webpage",
    correct: "a",
  },

  {
    question: "The <meta> tag in HTML is primarily used to:",
    a: "Store data about the webpage",
    b: "Link to external CSS",
    c: "Link to external JavaScript",
    d: "Create sections on the webpage",
    correct: "a",
  },

  {
    question: "The <div> tag in HTML is commonly used to:",
    a: "Create a hyperlink",
    b: "Create a division or a section in an HTML document",
    c: "Insert an image",
    d: "Define a header for a document or section",
    correct: "b",
  },

  {
    question: "The <nav> tag in HTML is typically used to:",
    a: "Define a header for a document or section",
    b: "Define navigation links",
    c: "Define a division or a section in an HTML document",
    d: "Insert an image",
    correct: "b",
  },

  {
    question: "Which HTML5 element is used to represent a container for introductory content or a set of navigational links?",
    a: "<body>",
    b: "<div>",
    c: "<header>",
    d: "<main>",
    correct: "c",
  },

  {
    question: "Which HTML5 element typically contains information about the document, such as authorship information, copyright information, and related documents?",
    a: "<header>",
    b: "<footer>",
    c: "<aside>",
    d: "<article>",
    correct: "b",
  },

  {
    question: "Which HTML5 element is used to represent a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable?",
    a: "<section>",
    b: "<div>",
    c: "<article>",
    d: "<aside>",
    correct: "c",
  },

  {
    question: "Which HTML5 element is used to group a block of related content?",
    a: "<div>",
    b: "<group>",
    c: "<article>",
    d: "<section>",
    correct: "d",
  },

  {
    question: "Which HTML5 element is used to represent a section of a page that consists of content that is tangentially related to the content around it, and which could be considered separate from that content?",
    a: "<aside>",
    b: "<section>",
    c: "<article>",
    d: "<div>",
    correct: "a",
  },

  {
    question: "The <details> tag in HTML is typically used to:",
    a: "Define additional details that the user can view or hide",
    b: "Create a hyperlink",
    c: "Insert an definition",
    d: "Define a header for a document or section",
    correct: "a",
  },

  {
    question: "The <summary> tag in HTML is typically used to:",
    a: "Create a summary",
    b: "Define a visible heading for a <details> element",
    c: "Insert an synthesis",
    d: "Define a header for a document or section",
    correct: "b",
  },

  {
    question: "The <time> tag in HTML is typically used to:",
    a: "Create a clock",
    b: "Create a calendar",
    c: "Define a date/time",
    d: "Insert an image",
    correct: "c",
  },

  {
    question: "What does the <form> tag define in HTML?",
    a: "A user input field",
    b: "An HTML form for user input",
    c: "A submit button",
    d: "A dropdown list",
    correct: "b",
  },

  {
    question: "What does the action attribute in a form specify?",
    a: "The method for sending form-data",
    b: "The URL to send form-data",
    c: "The input field in the form",
    d: "The type of form-data",
    correct: "b",
  },

  {
    question: "What does the method attribute in a form specify?",
    a: "The URL to send form-data",
    b: "The method for sending form-data",
    c: "The input field in the form",
    d: "The type of form-data",
    correct: "b",
  },
  
  {
    question: "What does the target attribute in a form specify?",
    a: "The input field in the form",
    b: "The URL to send form-data",
    c: "The method for sending form-data",
    d: "Where to open the response received after submitting the form",
    correct: "d",
  },

  {
    question: "What does the novalidate attribute in a form specify?",
    a: "The form-data should not be validated when submitted",
    b: "The form-data should be validated when submitted",
    c: "The URL to send form-data",
    d: "The method for sending form-data",
    correct: "a",
  },

  {
    question: "What does the size attribute in an input field specify?",
    a: "The maximum number of characters allowed in the input field",
    b: "The visible width, in characters, of an input field",
    c: "The minimum number of characters allowed in the input field",
    d: "The height of the input field",
    correct: "b",
  },

  {
    question: "What does the maxlength attribute in an input field specify?",
    a: "The visible width, in characters, of an input field",
    b: "The maximum number of characters allowed in the input field",
    c: "The minimum number of characters allowed in the input field",
    d: "The height of the input field",
    correct: "b",
  },

  {
    question: "What does the list attribute in an input field specify?",
    a: "It refers to a <datalist> element that contains pre-defined options for an <input> element",
    b: "It refers to a list of values that the input field can take",
    c: "It refers to a list of attributes that the input field can have",
    d: "It refers to a list of input fields in the form",
    correct: "a",
  },

  {
    question: "What is the HTML element used to show a video on a web page?",
    a: "<img>",
    b: "<media>",
    c: "<vid>",
    d: "<video>",
    correct: "d",
  },

  {
    question: "What attribute is used to add video controls, like play, pause, and volume?",
    a: "controls",
    b: "autoplay",
    c: "mute",
    d: "panel",
    correct: "a",
  },

  {
    question: "What attribute is used to start a video automatically?",
    a: "start",
    b: "autoplay",
    c: "matic",
    d: "run",
    correct: "b",
  },

  {
    question: "What are the three supported video formats in HTML5?",
    a: "MP4, WebM, and Ogg",
    b: "MP4, AVI, and MOV",
    c: "MP4, WebM, and AVI",
    d: "MP4, MOV, and Ogg",
    correct: "a",
  },

  {
    question: "What is the HTML element used to play an audio file on a web page?",
    a: "<media>",
    b: "<sound>",
    c: "<audio>",
    d: "<music>",
    correct: "c",
  },

  {
    question: "What are the three supported audio formats in HTML5?",
    a: "MP3, WAV, and OGG",
    b: "MP3, WMA, and OGie",
    c: "MP3, WAV, and WMA",
    d: "MP3, AAA, and OGG",
    correct: "a",
  },

  {
    question: "What is the purpose of the <object> element in HTML?",
    a: "To define an embedded object within an HTML document",
    b: "To insert an image into the HTML document",
    c: "To create interactive content",
    d: "To link to an external JavaScript file",
    correct: "a",
  },

  {
    question: "What is the purpose of the <embed> element in HTML?",
    a: "To define an embedded object within an HTML document",
    b: "To insert an image into the HTML document",
    c: "To create interactive content",
    d: "To link to an external JavaScript file",
    correct: "a",
  },

  {
    question: "What is the easiest way to play videos in HTML?",
    a: "Using the <video> tag",
    b: "Using the <embed> tag",
    c: "Using YouTube",
    d: "Using the <media> tag",
    correct: "a",
  },

  {
    question: "How can you let a YouTube video start playing automatically when a user visits the page?",
    a: "Adding autoplay=1 to the YouTube URL",
    b: "Adding autoplay=1 to the YouTube URL",
    c: "Adding start=1 to the YouTube URL",
    d: "Adding run=1 to the YouTube URL",
    correct: "a",
  },

  {
    question: "How can you let a YouTube video loop forever?",
    a: "Adding loop=1 to the YouTube URL",
    b: "Adding loop=0  to the YouTube URL",
    c: "Adding cycle=1 to the YouTube URL",
    d: "Adding round=0 to the YouTube URL",
    correct: "a",
  },

  {
    question: "How can you prevent controls from displaying in the YouTube video player?",
    a: "Adding controls=0 to the YouTube URL",
    b: "Adding hidecontrols=1 to the YouTube URL",
    c: "Adding nocontrols=1 to the YouTube URL",
    d: "Adding removecontrols=1 to the YouTube URL",
    correct: "a",
  },

  {
    question: "What is the purpose of the <source> element in HTML?",
    a: "To define the source of an image",
    b: "To define the source of a script",
    c: "To define multiple media resources for media elements, such as <video> and <audio>",
    d: "To define the source of a stylesheet",
    correct: "c",
  },

  {
    question: "What is the purpose of the controls attribute in HTML?",
    a: "To control the size of a media element",
    b: "To control the color of a media element",
    c: "To add media controls, like play, pause, and volume",
    d: "To control the position of a media element",
    correct: "c",
  },

  {
    question: "What does the autoplay attribute do in HTML?",
    a: "It starts a media file automatically",
    b: "It controls the speed of media playback",
    c: "It repeats the media file automatically",
    d: "It mutes the media file",
    correct: "a",
  },

  {
    question: "What is the main feature of HTML5 Web Workers?",
    a: "It allows any HTML element to be dragged and dropped",
    b: "It provides the user's geographical location",
    c: "It stores user data locally in the browser",
    d: "It runs JavaScript in the background, without affecting the performance of the page",
    correct: "d",
  },

  {
    question: "What is the main difference between localStorage and sessionStorage in HTML5 Web Storage?",
    a: "localStorage data has no expiration date, while sessionStorage data is lost when the browser tab is closed",
    b: "localStorage data is lost when the browser tab is closed, while sessionStorage data has no expiration date",
    c: "localStorage allows drag and drop functionality, while sessionStorage provides the user's geographical location",
    d: "localStorage runs JavaScript in the background, while sessionStorage stores user data locally in the browser",
    correct: "a",
  },

  {
    question: "What is the main limitation of Web Workers in HTML5?",
    a: "They do not have access to the window object, the document object, and the parent object",
    b: "They can only store a small amount of data",
    c: "They cannot run in the background",
    d: "They do not support drag and drop functionality",
    correct: "a",
  },

  {
    question: "In HTML5 Web Storage, how do you remove a specific item from the localStorage?",
    a: "localStorage.deleteItem('itemname')",
    b: "localStorage.removeItem('itemname')",
    c: "localStorage.clearItem('itemname')",
    d: "localStorage.destroyItem('itemname')",
    correct: "b",
  },
  

];


const quiz = document.getElementById('quiz');
const answerEls = document.querySelectorAll('.answer');
const questionEl = document.getElementById('question');
const a_text = document.getElementById('a_text');
const b_text = document.getElementById('b_text');
const c_text = document.getElementById('c_text');
const d_text = document.getElementById('d_text');
const submitBtn = document.getElementById('submit');

let currentQuiz = 0;
let score = 0;
let randomQuizData = [];

function shuffleQuizData() {
  randomQuizData = quizData.sort(() => Math.random() - 0.5).slice(0, 10);
}


function loadQuiz() {
  deselectAnswers();

  if (currentQuiz === 0) {

    shuffleQuizData();
  }

  const currentQuizData = randomQuizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
}

function deselectAnswers() {
  answerEls.forEach((answerEl) => (answerEl.checked = false));
}

function getSelected() {
  let answer;
  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });
  return answer;
}

function sendQuizResult(score) {
  $.ajax({
    type: 'POST',
    url: 'storeQuizResult.php', 
    data: { score: score },
    success: function (response) {
      console.log(response); 
    },
    error: function (xhr, status, error) {
      console.error(error); 
    },
  });
}

// Function to show the score summary and feedback
function showScoreSummary() {
  quiz.innerHTML = `
    <h2>You answered ${score}/${randomQuizData.length} questions correctly</h2>
    <div class="button-container">
      <button onclick="location.reload()">Reload</button>
      <button onclick="navigateToWorkplaceMain()">Done</button> 
    </div>
  `;  

  // Call the function to send the user's score to the server
  sendQuizResult(score);
}

function navigateToWorkplaceMain() {
  window.location.href = 'workplaceMain.php';
}

function retakeQuiz() {
  // Reset the currentQuiz and score variables
  currentQuiz = 0;
  score = 0;
  // Hide the Done and Retake buttons
  document.getElementById('done').style.display = 'none';
  document.getElementById('retake').style.display = 'none';
  // Shuffle the quizData for a new attempt
  shuffleQuizData();
  // Load the first question
  loadQuiz();
}

submitBtn.addEventListener('click', () => {
  const answer = getSelected();

  if (answer) {
    if (answer === randomQuizData[currentQuiz].correct) {
      score++;
    }

    currentQuiz++;

    if (currentQuiz < randomQuizData.length) {
      loadQuiz();
    } else {
      // Call the function to display the score summary and feedback
      showScoreSummary();
    }
  }
});

// Initial load of the quiz
loadQuiz();


submitBtn.addEventListener('click', () => {
  const answer = getSelected();

  if (answer) {
    if (answer === randomQuizData[currentQuiz].correct) {
      score++;
    }

    currentQuiz++;

    if (currentQuiz < randomQuizData.length) {
      loadQuiz();
    } else {
      // Call the function to display the score summary and feedback
      showScoreSummary();
    }
  }
});

// Initial load of the quiz
loadQuiz();





