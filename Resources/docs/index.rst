NOTE: THIS IS A WORK IN PROGRESS!

Definitive CMS
##############

Why is it the "Definitive" CMS?
-------------------------------

It's a valid question. After all, aren't there enough CMS apps? Well, yes, there are lots of nice content management
systems out there, but no one has all the features that I'd like to have. The following section shows which points
I'd like this CMS to cover.

Requirements:

- It must be very simple to use for any user. Its control panel must have a clear and simple to use interface.
- It should allow to create a complex website tree with pages, each of them including Components and elements (more on that later). with custom properties.
- It must have a way to change the backend and frontend Templates.
- Each template can have one or more Layouts. Each Layout have different Positions where it will hold the contents of a Page, and its Components.
- A Page is an entity representing a page in the website. Each page can have other pages as its children. When you create a Page, you must select a Layout from the currently active Template.
- Elements are contained by a Page. An element could be a Category, a Product, or anything you like. Each element should have its own custom properties, including other elements, allowing to form a tree.
- Users should be allowed to create custom elements, with custom properties.
- Components are included by Templates or Plugins. They're containers that are placed in Pages, in the Positions defined by the Layout of a Template. A Component could be from simple custom HTML to complex forms, image galleries, etc.
- It must provide a way to create different "Versions" of the site. A Version is used to create, for example, one version for desktop browsers, one for smartphones and one for tablets. It should be a way to create a Version from other Version to simplify the process of creating the same tree with the same contents. Templates should offer Layouts for desktop and for mobile versions. The same applies for Components included in the Template.
- A Plugin is a way to extend the CMS. It can offer integration with Web Services, different authentication mechanisms, etc.
- Every part of the CMS must be translatable in an easy way.
- It should be a way to control permissions of every aspect of the CMS. It should have a complex (but simple to use) ACL configuration panel to control access to functionalities from the backend and the frontend.
- It should have enough events to enable users to extend the CMS easily.
