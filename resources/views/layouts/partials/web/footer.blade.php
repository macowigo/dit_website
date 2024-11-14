<footer>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div style="padding-top:20px;"class="dit-footer-wrapper ">
        <div class="dit-footer-container dit-container clearfix">
  
          <div class="dit-footer-column dit-item-pdlr dit-column-15">
              <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget dit-widget ">
                    <h3 style="color:#163269" class="dit-widget-title">Our Address </h3><span class="clear"></span>
                    <div style="color:#163269" class="menu-our-campus-container">
                           <p> <span class="menu-item" id="span_1dd7_10"></span> Bibititi and Morogoro Rd Junction
                            <br /> P. O. Box 2958
                            <br /> Dar-es-salaam, Tanzania</p>
                        <p><span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span><a id="a_1dd7_8" href="mailto:admin@dituni.edu">rector@dit.ac.tz</a></p>
                    </div>
                </div>
            </div>
  
            <div class="dit-footer-column dit-item-pdlr dit-column-15">
                <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget dit-widget">
                    <h3 style="color:#163269" class="dit-widget-title">Campus Life</h3><span class="clear"></span>
                    <div  class="menu-campus-life-container">
                        <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            <li class="menu-item"><a href="https://dit.ac.tz/documents/dit_student_welfare.pdf">Student Welfare </a></li>
                            <li class="menu-item"><a href="https://dit.ac.tz/documents/dit_accommodation.pdf">Accommodation Policy</a></li>
                            <li class="menu-item">  <a href="https://dit.ac.tz/documents/dit_ditso_constitution.pdf"> DITSO Constitution</a></li>
  
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dit-footer-column dit-item-pdlr dit-column-15">
                <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget dit-widget">
                    <h3 style="color:#163269" class="dit-widget-title">Academics</h3><span class="clear"></span>
                    <div class="menu-academics-container">
                        <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            <li class="menu-item"> <a href="https://dit.ac.tz/documents/dit_prospectus.pdf">Prospectus</a></li>
                          <li class="menu-item"> <a href="#">Almanac</a></li>
                            <li class="menu-item"> <a href="#">Timetable</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dit-footer-column dit-item-pdlr dit-column-15">
                <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget dit-widget">
                    <h3 style="color:#163269" class="dit-widget-title">Locate Us</h3><span class="clear"></span>
                    <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                     <div style="overflow:hidden;width: 100%;position: relative;">
                         <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.629801219432!2d39.27783391431615!3d-6.814801768549168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b09e848c92d%3A0x90d02db3c3d6c912!2sDar%20es%20Salaam%20Institute%20of%20Technology!5e0!3m2!1sen!2stz!4v1617266269821" width="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                         <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                         </div>
                         <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                     </div>
                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  
    <div style = "background:#192F59;" class="dit-copyright-wrapper">
        <div  style="padding:14px;" class="dit-copyright-container dit-container clearfix">
          <div class="dit-copyright-text dit-item-pdlr">
              <div style="font-weight:300;"class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                  <a href="#">Privacy Policy 	&nbsp;
                  </a>
                  <a href="#" > Terms and Conditions 	&nbsp;
                  </a>
                  <a href="#">Copyright Statements 	&nbsp;
                  </a>
                  <a href="#">Disclaimer
                  </a>
              </div>
          </div>
          <div style = "color: #FFFFFF" class="dit-copyright-text dit-item-pdlr">&#169; {{ date('Y') }} All Right Reserved, DIT </div>
        </div>
    </div>
    {{-- chat bot --}}
    <style>
      /* Global Styles */
      *, *::before, *::after {
          box-sizing: border-box;
      }

      body {
          margin: 0; /* Reset default margin */
          padding: 0; /* Reset default padding */
      }

      /* Notification Styles */
      .notification {
          position: fixed;
          bottom: 28px;
          right: 80px;
          background-color: #192f59; /* Updated color */
          color: white;
          padding: 10px;
          border-radius: 8px;
          font-size:10px;
          z-index: 10001; /* Above chat widget */
          animation: pulse 1.5s infinite; /* Continuous pulsing animation */
          white-space: normal; /* Allow text to wrap */
          width: auto; /* Set a max width for wrapping */
      }

      @keyframes pulse {
          0% { transform: scale(1); }
          50% { transform: scale(1.05); }
          100% { transform: scale(1); }
      }

      /* Chat Widget Styling */
      .chat-widget {
          width: 300px; /* Set width to 340px */
          max-width: 90vw; /* Responsive width */
          border: 1px solid #e0e0e0;
          border-radius: 12px;
          box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
          position: fixed;
          bottom: 20px;
          right: 20px;
          background-color: #fff;
          overflow: hidden;
          transition: all 0.3s ease;
          visibility: hidden; /* Initially hidden */
          height: 590px; /* Set height to 590px */
          display: flex;
          flex-direction: column;
          z-index: 9999; /* Ensure it's above other elements */
      }

      /* When chat is open */
      .chat-open {
          visibility: visible;
          height: 450px; /* Fixed height for the chat widget */
      }

      /* Chat Header */
      .chat-header {
          background-color: #192f59; /* Updated header color */
          color: white;
          padding: 15px;
          text-align: center;
          font-weight: bold;
          position: relative;
          flex-shrink: 0;
          display: flex;
          align-items: center;
          justify-content: space-between; /* Space between title and icons */
      }

      /* Icons in Header */
      .minimize-icon, .reload-icon {
          cursor: pointer;
          font-size: 20px;
          color: white;
      }

      /* Chat Body */
      .chat-body {
          padding: 15px;
          flex: 1;
          overflow-y: auto;
          background-color: #f9f9f9; /* Background color for chat body */
      }

      /* Individual Messages */
      .message {
          display: flex;
          align-items: flex-start;
          margin-bottom: 10px;
      }

      /* User message styling */
      .user-message {
          justify-content: flex-end; /* Align user messages to the right */
      }

      /* AI message styling */
      .ai-message {
          justify-content: flex-start; /* Align AI messages to the left */
      }

      .message img {
          width: 30px; /* Avatar size */
          height: 30px;
          border-radius: 50%;
          margin-right: 10px;
          object-fit: cover;
      }

      .message-content {
          border-radius: 15px;
          padding: 10px;
          max-width: 80%;
          box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
          font-size:12px;
          text-align: justify;
          hyphens: auto;
      }

      /* AI Message Styling */
      .ai-message .message-content {
          background-color: #e1f5fe; /* Light blue for AI messages */
          color: #000; /* Dark text */
      }

      /* User Message Styling */
      .user-message .message-content {
          background-color: #192f59; /* Updated user bubble color */
          color: white; /* Text color */
         
          
      }

      /* Chat Footer */
      .chat-footer {
          border-top: 1px solid #e0e0e0;
          padding: 10px;
          display: flex;
          align-items: center;
          flex-shrink: 0;
          background-color: #fff;
      }

      .chat-footer textarea {
          flex: 1; /* Takes available space */
          padding: 10px;
          border: 1px solid #e0e0e0;
          border-radius: 20px;
          margin-right: 10px;
          outline: none;
          font-size: 14px;
          min-height: 40px; /* Minimum height for consistency */
          resize: none; /* Prevent manual resizing */
          overflow: hidden; /* Hide overflow */
      }

      .chat-footer button {
          background-color: #192f59; /* Updated send button color */
          border: none;
          color: white;
          padding: 10px;
          border-radius: 50%; 
          cursor: pointer;
          font-size: 16px;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: background-color 0.3s ease;
          min-width: 40px; /* Ensure button is large enough */
          min-height: 40px; /* Ensure button is large enough */
      }

      .chat-footer button:hover:not(:disabled) {
          background-color: #16304a; /* Darker shade on hover */
      }

      .chat-footer button:disabled {
          background-color: #aaa;
          cursor: not-allowed;
      }

      /* Open Chat Button */
      .open-chat-button {
          display: flex;
          align-items: center; /* Align icon and text */
          position: fixed;
          bottom: 20px;
          right: 20px;
          background-color: #192f59; /* Open button color */
          border-radius: 100%; /* Make it circular */
          width: 50px; /* Set width */
          height: 50px; /* Set height */
          cursor: pointer;
          animation: pulse 1.5s infinite; /* Add animation to attract attention */
          z-index: 10000; /* Higher than chat widget */
          box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
          justify-content: center; /* Center the icon */
      }

      /* Icon inside the button */
      .open-chat-button img {
          width: 40px; /* Increased size of the icon */
          height: 40px; /* Increased size of the icon */
      }

      /* Animation Keyframes */
      @keyframes pulse {
          0% { transform: scale(1); }
          50% { transform: scale(1.1); }
          100% { transform: scale(1); }
      }

      /* Hide "Open Chat" button when chat is open */
      .open-chat-button.hidden {
          display: none;
      }

      /* Responsive Adjustments */
      @media (max-width: 400px) {
          .chat-widget {
              width: 90vw; /* Ensure responsiveness on small screens */
              right: 5vw;
          }

          .chat-footer textarea {
              font-size: 12px;
          }

          .chat-footer button {
              padding: 8px;
              font-size: 14px;
              min-width: 35px;
              min-height: 35px;
          }

          .chat-header {
              font-size: 16px;
          }

          .open-chat-button {
              padding: 8px 16px;
              font-size: 14px;
              width: 60px; /* Adjust for mobile */
              height: 60px; /* Adjust for mobile */
          }
      }


.chat-bubble::before {
  content: "";
  position: absolute;
  bottom: 0;
  right: -13px; /* Change position to the right */
  width: 0;
  height: 0;
  border-right: 10px solid transparent;
  border-left: 10px solid #192f59; /* Pointing towards the profile picture */
  border-top: 10px solid transparent;
  border-bottom: none;
}

  </style>
</head>
<body>

<!-- Notification Message -->
<div class="notification" id="chatInstruction">
        <div class="chat-bubble">
          <span>Chat with us</span>
        </div>
</div>

<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget">
  <div class="chat-header">
      <span class="minimize-icon" id="minimizeIcon">&#8722;</span>
      <span>Chat With Us</span> 
      <span class="reload-icon" id="reloadIcon">&#8635;</span>
  </div>
  <div class="chat-body" id="chatBody">
      <div class="message ai-message">
          <img src="{{asset('assets/icons/chat.png')}}" alt="AI Avatar">
          <div class="message-content">
              <p>Welcome! How can I help you today?</p>
          </div>
      </div>
  </div>
  <div class="chat-footer">
      <textarea id="chatInput" rows="1" placeholder="Type a message..." oninput="adjustTextarea(this)"></textarea>
      <button id="sendBtn" disabled>&#9658;</button>
  </div>
</div>

<!-- Button to Open Chat When Minimized -->
<div class="open-chat-button" id="openChatButton">
  <img src="https://cdn.files-text.com/api/ow/img/b9c3b2e3-c30b-4ffd-9456-2ef926ae2abd/chatbot_avatar/b4cfiz4j7z30iot9fnll2qk5.png" alt="Chat Icon">
</div>

<script>
  const minimizeIcon = document.getElementById('minimizeIcon');
  const reloadIcon = document.getElementById('reloadIcon');
  const chatWidget = document.getElementById('chatWidget');
  const openChatButton = document.getElementById('openChatButton');
  const chatBody = document.getElementById('chatBody');
  const chatInstruction = document.getElementById('chatInstruction');
  let isMinimized = true;

  // Initially, the chat widget is hidden and only the "Open Chat" button is visible
  openChatButton.addEventListener('click', function() {
      chatWidget.classList.add('chat-open');
      openChatButton.classList.add('hidden'); // Hide the "Open Chat" button
      chatInstruction.style.display = 'none'; // Hide the instruction message
      isMinimized = false;
  });

  // Minimize chat when the minimize icon is clicked
  minimizeIcon.addEventListener('click', function() {
      if (!isMinimized) {
          chatWidget.classList.remove('chat-open'); // Hide the chat
          openChatButton.classList.remove('hidden'); // Show the "Open Chat" button again
          isMinimized = true;
      }
  });

  // Refresh chat when the reload icon is clicked
  reloadIcon.addEventListener('click', function() {
      chatBody.innerHTML = ''; // Clear all messages in the chat body
      addMessageToChat('Welcome! How can I help you today?', 'ai'); // Add welcome message again
  });

  // Enable send button when text is entered
  const chatInput = document.getElementById('chatInput');
  const sendBtn = document.getElementById('sendBtn');

  chatInput.addEventListener('input', function() {
      sendBtn.disabled = chatInput.value.trim() === '';
  });

  // Handle sending messages
  sendBtn.addEventListener('click', async () => {
      const message = chatInput.value.trim();
      if (message) {
          // Add user message to chat
          addMessageToChat(message, 'user');
          chatInput.value = '';
          sendBtn.disabled = true;

          // Send message to server
          try {
              const response = await fetch('https://7af62739dc8e.ngrok.app/api/chat', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({
                      userId: 'web_user',
                      message: message,
                  }),
              });

              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }

              const data = await response.json();
              addMessageToChat(data.response, 'ai');
          } catch (error) {
              console.error('Error:', error);
              addMessageToChat("Error communicating with server. Please try again later.", 'ai');
          }
      }
  });

  // Function to adjust the height of the textarea
  function adjustTextarea(element) {
      element.style.height = 'auto'; // Reset height to allow shrinking
      element.style.height = element.scrollHeight + 'px'; // Set height to scroll height
  }

  // Function to add messages to the chat
  function addMessageToChat(content, role) {
      const messageElement = document.createElement('div');
      messageElement.classList.add('message');
      messageElement.classList.add(role === 'user' ? 'user-message' : 'ai-message');
      
      if (role === 'ai') {
          messageElement.innerHTML = `
              <img src="{{asset('assets/icons/chat.png')}}" alt="Icon">
              <div class="message-content">
                  <p>${content}</p>
              </div>
          `;
      } else {  
          messageElement.innerHTML = `
              <div class="message-content">
                  <p>${content}</p>
              </div>
          `;
      }
      
      chatBody.appendChild(messageElement);
      chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the bottom
  }

  // Show chat instruction on page load
  window.onload = function() {
      chatInstruction.style.display = 'block'; // Show the instruction
  };
</script>
    </footer>
  