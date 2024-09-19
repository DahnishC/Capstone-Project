# Capstone-Project Fall 2024

### 1. Project Title
Battle Royale CTF

### 2. Project Overview
The Capture the Flag (CTF) competition is a premier cybersecurity challenge designed to engage, educate, and inspire the university community, including students, faculty, and staff. Offering hands-on experience through a fun, game-like environment, it bridges the gap between theoretical knowledge and practical skills in cybersecurity. By participating, individuals have the unique opportunity to test and showcase their ability to tackle real-world cybersecurity challenges, fostering a vibrant culture of learning, collaboration, and friendly competition.

### 3. Problem Statement
There is a lack of cybersecurity knowledge and access to engaging cybersecurity opportunities across the university. Key stakeholders include LMU students, faculty, staff, and sponsors. Solving this problem is crucial for developing practical cybersecurity skills, enriching educational experiences, fostering community engagement, and improving professional growth opportunities, thereby enhancing LMU's reputation as a leader in cybersecurity education.

### 4. ISBA Subfields
The 3 ISBA subfields involved.
  - **Computer Science (Java Script)** - CSS for designing the website of the capture the flag. 
  - **Cybersecurity** - The vulnerability and access to data to others. Robots.txt contains very sensitive data. 
  - **Structured Query Language**  - Meta Data and Digital Forensic Analysis

### 5. Solution Overview
**First Challenge (Web Exploitation)** - We created a default homepage of a website. Must find vulnerability. 
**Second Challenge (Digital Forensic Analysis)**  - We used Photoshop to create an LMU logo. From the image, we got the metadata details which we configured under the author with the flag for the Digital Forensic Analysis challenge. 
As for the competitor, they must have this image on there laptop or device they are using so they can look at the MetaData of Photo, to find the flag!
**List of the technologies used:**
**Programming Languages:** JavScript 
**Frameworks:** BlueJ
**Data Storage:** index.html, CTFD
**Software/Tools:** PhotoShop, Dockerfile, SQL
**Hosting:** CTFD
**Data:** index.html, robots.txt, png, javascript file, cascading style sheet.

### 6. Solution Details (Technical Terms)
The goal is to introduce participants to the field of Digital Forensics with a focus on Metadata Analysis. Metadata embedded in files can often reveal valuable information, such as the origin of the file, author details, timestamps, and even embedded messages (flags).
  - **Image Creation:** The challenge starts with creating an image (LMU logo) using Photoshop. The metadata fields within the file, particularly EXIF, IPTC, and XMP, are edited to include a hidden flag under the author’s name.
  - **Embedding Metadata:** Photoshop’s metadata panel allows for embedding custom metadata:
      - **Author:** The flag for the challenge is inserted into the Author field of the metadata.
      - **Timestamps & Copyright:** Additional metadata fields, like timestamps, were left to simulate a real-world scenario.
**Frameworks:**
  - **ExifTool:** A command-line tool to extract metadata from files.
  - **Exif Viewer:** Web-based tool to view metadata.
  - **Adobe Photoshop:** Used to create and modify image metadata.

### 7. Next Steps / Future Improvements
Features that were planned but abandoned or scaled down.
**Planned:** The original design included dynamic elements such as real-time feedback for participants when they submitted answers or hints, as well as interactive walkthroughs for beginners
However, it was abandoned due to the additional complexity and the significant development time it would take
How can the project be deployed into production if the project still needs to be in production.
If project needs to be in production while being deployed in production, use version control to track changes to the code, Docker images. Once changes are tested and verified, they can be deployed to production using CI/CD pipelines, ensuring a smooth transition.
What aspects can be scaled (e.g., throughput, adoption).
Customizing the difficulty levels to have a wider audience from beginners to advanced users. 
User experience enhancement can be scaled by introducing step-by-step tutorials that guide users through the basics and makes it more accessible for the beginners
Areas for improvement or what could be done differently in the future.
Implement a support system where participants can get help on technical issues or ask for hints if they are stuck on a challenge. Also, being able to collect feedback from participants to understand their experience and look for further improvement. 

### 8. Retrospective
Specific challenges encountered during the project and how they were addressed.
  - Gained deeper knowledge in container security best practices, like creating dockerfiles and managing container lifecycles 
  - New skills or insights gained throughout the project.
  - Have used photoshop multiple times, never knew there was metadata viewer 


### Useful Links, Data, and Documents
![CTFD LMU Screenshot](https://github.com/user-attachments/assets/33e72c39-85ce-4eaf-9fc9-3346dcf3cc7e)
![Platform Setup CTF Screenshot](https://github.com/user-attachments/assets/649e8795-8bb7-48c1-9fbc-558ac25331b2)
![Statistics CTF Screenshot](https://github.com/user-attachments/assets/e41ab618-ab13-4b34-9ad0-4bf66bf4fb9b)

