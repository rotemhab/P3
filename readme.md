Project 3

Developer's Best Friend

Live URL

http://p3.rotemhaber.com

Description

This app allows the user to generate random Lorem Ipsum text and random user names

Details for teaching team

The workflow of this app is as follows:
1. There are 3 html pages, a home page, a lorem ipsum generator page and a user generator page.
2. I've used 5 routes to direct traffic, 1 for the homepage, directing to a static view, and two for each generator page. The GET route for the generator page loads the relevant view directly while the POST route for the same page loads the relevant controller.
3. The controllers collect the data submitted through the form, validate it, and then run an external package to generate either random lorem ipsum text or user names and return the view with the generated text.
4. External packages used for this project:
    1. ecrmnn/lorem
    2. nubs/random-name-generator

