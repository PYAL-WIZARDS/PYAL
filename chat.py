def greeting():    return "Hello! I'm your online voting system chatbot. How can I assist you today? select from main menu below, for futher assistance email: amukelaniey23@gmail.com or contact: 011 854 7777 from 9am-5pm weekdays"
def answer_question(option):
    if option == 1:        return "An online voting system is a digital platform that allows eligible voters to cast their votes over the internet instead of going to a physical polling location."
    elif option == 2:
        return "Online voting systems work by providing eligible voters with a secure online platform to log in, verify their identity, and cast their votes electronically. These systems use encryption and security measures to protect the integrity of the voting process."
    elif option ==3:        return "Online voting systems are designed to be secure, employing encryption, identity verification, and auditing mechanisms. However, they are not without risks, and continuous monitoring and updates are essential to mitigate vulnerabilities."
    elif option == 4:
        return "The process for using an online voting system typically involves voter registration, secure login, identity verification, and electronic voting. After casting their votes, voters receive a confirmation of their participation."
    elif option == 5:
        return "Online voting systems use various methods for identity verification, including biometrics, unique voter IDs, two-factor authentication, and personal information matching."
    elif option == 6:        return "While online voting systems are designed with security in mind, they are not immune to hacking attempts. Strong security measures and continuous monitoring are crucial to minimize risks."
    elif option == 7:
        return "Votes in online voting systems are recorded securely using cryptographic techniques and can be audited to ensure their integrity."
    elif option == 8:        return "Advantages of online voting systems include increased accessibility, reduced voting time, cost savings, and the potential for higher voter turnout. Disadvantages include security concerns, technical issues, the digital divide, and the need for robust cybersecurity."
    elif option == 9:
        return "To register for online voting, please check with your local election authority or government website. They will provide information on the registration process and eligibility criteria."
    elif option == 10:        return "Online voting systems are not universally used in all elections. Their adoption varies by region and depends on government policies and election authorities."
    elif option ==11:
        return "Goodbye! If you have more questions in the future, email: amukelaniey23@gmail.com or contact: 011 854 7777 from 9am-5pm weekdays"
    else:        return "Invalid option. Please select a valid option."
def main():
    print(greeting())
    while True:        print("\nMenu Options:")
        print("1. What is an online voting system?")        print("2. How do online voting systems work?")
        print("3. Are online voting systems secure?")        print("4. What is the process for using online voting systems?")
        print("5. How are voters' identities verified in online voting?")        print("6. Are online voting systems vulnerable to hacking?")
        print("7. Can votes be changed or tampered with in online voting systems?")        print("8. What are the advantages and disadvantages of online voting systems?")
        print("9. How can I register for online voting?")        print("10. Are online voting systems used in all elections?")
        print("11. Exit")
        choice = input("Enter your choice (1-11): ")
        if choice == '11':            print(answer_question(choice))
            break
        response = answer_question(choice)        print(response)
if name == "__main__":
    main()