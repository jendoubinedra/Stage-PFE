
body {
  margin: 0;
  padding: 0;
  background-color: black;
}
@mixin grid {
  display: grid;
  place-content: center;
}
$b1: 2px solid red;
$b2: 2px solid rgb(0, 238, 255);
.grid {
  display: grid;
  grid-template-rows: 1fr 1fr; //height
  grid-template-columns: 1fr; //width
  height: auto;
  background-color: #000;
  grid-gap: 1em;
  .items {
  @include grid();
  } 
  #item2 {
    border-top:2px solid grey;
    .footer {
      display: flex;
      flex-direction: row;
      .icons {
        margin: 0.5rem;
        color: rgb(255, 255, 255);
     
        font-size: 3rem;
        text-align: center;
        i {
          padding: 1rem;
        }
        .text {
          padding: 1rem;
          font-family: sans-serif;
          font-size: 1rem;
        }
      }
    }
  }
}
@media screen and (max-width: 700px) {
  .footer {
    display: flex;
    flex-direction: column-reverse;
    box-orient: vertical;
  }
}

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    
  </body>
