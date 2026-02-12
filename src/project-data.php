<?php
// EOD um Probleme mit php beim copy von Codes zu verhindern (bsp.:"")
$projects = [
    1 => [
        "title" => "Bankautomat",
        "description" => "Ein Bankautomat ohne Datenbank simulieren.",
        "image" => "img/projekt4.jpg",
        "image_credit" => 'Image from <a href="https://unsplash.com/de/@artturijalli" target="_blank">Artturi Jalli</a> on <a href="https://unsplash.com/de/fotos/g5_rxRjvKmg" target="_blank">Unsplash</a>',
        "language" => "language-python",
        "code" => <<<EOD
name = input("Wie ist dein Name?: ")
kontostand = float(input(f"Hallo {name}, bitte nennen Sie mir Ihren aktuellen Kontostand: "))

while True:
    question = input(f"Was möchten Sie tun? \n1 - Kontostand anzeigen \n2 - Geld einzahlen \n3 - Geld auszahlen \n4 - Beenden \nEingabe: ")

    if question == "1":
        print(f"Ihr Kontostand beträgt aktuell: {kontostand:.2f}€")

    elif question == "2":
        einzahlen = float(input("Wie viel möchten sie einzahlen?: "))
        kontostand += einzahlen
        print(f"Prima, ihr aktueller Kontostand beträgt nun: {kontostand:.2f}€!")

    elif question == "3":
        auszahlen = float(input("Wie viel möchten sie abheben?: "))
        if auszahlen > kontostand:
            print("Nicht genügend Guthaben!")
        else:
            kontostand -= auszahlen
            print(f"Prima, ihr aktueller Kontostand beträgt nun: {kontostand:.2f}€!")

    elif question == "4":
        print("vielen Dank, hoffentlich sehen wir Sie bald wieder!")
        break
    
    else:
        print("falsche Eingabe")

# Beispiel aus dem Kommentarbereich unten im Bild:
# weiter = input("Möchten Sie noch etwas tun? (j/n): ")
# if weiter.lower() != "j":
#     break
EOD
    ],
    2 => [
        "title" => "Mitgliedschaft",
        "description" => "Berechnung der Gebühren mittels Python",
        "image" => "img/projekt4.jpg",
        "image_credit" => 'Image from <a href="https://unsplash.com/de/@artturijalli" target="_blank">Artturi Jalli</a> on <a href="https://unsplash.com/de/fotos/g5_rxRjvKmg" target="_blank">Unsplash</a>',
        "language" => "language-python",
        "code" => <<<EOD
name = input("What is your name? \n"
             ":")
member_fee = float(input(f"Hello {name} what´s the price of your current membership? \n"
                         f":"))

while True:

    answer = input("1 - Show current membership fee \n"
                   "2 - Use discount \n"
                   "3 - Increase fee \n"
                   "4 - Cancel contract \n"
                   ":")

    if answer == "1":
        if member_fee <= 0:
            print("You cant be negative")
        print(f"Your current membership fee is {member_fee:.2f}€")


    elif answer == "2":
        discount = float(input("What is the discount percentage (%)? \n"
                               ":"))
        member_fee = member_fee * (1 - discount / 100)
        if member_fee <= 0:
            print("please enter a positive number")
        print(f"Your new membership fee is {member_fee:.2f}€")


    elif answer == "3":
        increase = float(input("By how much do you want to increase the fee (%)? \n"
                               ":"))
        member_fee = (member_fee * (1 + increase / 100))
        if member_fee <= 0:
            print("You cant be negative")
        print(f"Nice, your new membership fee is {member_fee:.2f}€")


    elif answer == "4":
        print("Your contract has been canceled, we hope to see you again soon")
        break
    else:
        print("Please enter a valid option between 1 and 4")
EOD
    ], 
    3 => [
        "title" => "Passwort Evaluieren",
        "description" => "Bewertung der Passwortstärke mittels Python.",
        "image" => "img/projekt4.jpg",
        "image_credit" => 'Image from <a href="https://unsplash.com/de/@artturijalli" target="_blank">Artturi Jalli</a> on <a href="https://unsplash.com/de/fotos/g5_rxRjvKmg" target="_blank">Unsplash</a>',
        "language" => "language-python",
        "code" => <<<EOD

def evaluate_password(password):
    score = 0 
    hints = []
    
    #Länge
    if len(password) >= 8: 
        score += 1 
    else:
        hints.append("The password should be at least 8 characters long")
    
    #Groß- und Kleinbuchstaben
    if any(c.isupper() for c in password):
        score += 1
    else:
        hints.append("At least one Capital letter is missing")

    if any(c.islower() for c in password):
        score += 1
    else:
        hints.append("At least one lowercase letter is missing")
    
    #Zahl
    if any(c.isdigit() for c in password):
        score += 2 
    else:
        hints.append("At least one number please")
        
    #Sonderzeichen
    if any(not c.isalnum() for c in password):
        score += 2
    else:
        hints.append("At least one special character is missing")
        
    #Muster:
    
    #Doppelt
    def consecutive_letters(text):
        prev_letter = None
        found = False
  
        for letter in text:
            if letter == prev_letter:
                return True
            prev_letter = letter
        return False
        
    if consecutive_letters(password):
        hints.append("Avoid repeated consecutive letters")
        score -= 1
      
    #Score
    if score <= 2:
        level = "Weak"
    elif score <= 4:
        level = "Average"
    else:
        level = "Strong"
        

    results = {
        "score": score,
        "level": level,
        "hints": hints
    }
    

    return results

def main():
    print("Password evaluation (type 'exit' to quit)")

    while True:
        user_input = input("Please enter a password: ")

        if user_input.lower() == "exit":
            print("Program terminated.")
            break

        result = evaluate_password(user_input)

        print("\nResult:")
        print(f"Score: {result['score']}")
        print(f"Level: {result['level']}")

        if result["hints"]:
            print("Hints:")
            for hint in result["hints"]:
                print(f"- {hint}")
        else:
            print("No hints.")

        print("-" * 30)


if __name__ == "__main__":
    main()


EOD
    ],

    4 => [
        "title" => "Notenliste",
        "description" => "Notenberechnung mit Python.",
        "image" => "img/projekt4.jpg",
        "image_credit" => 'Image from <a href="https://unsplash.com/de/@artturijalli" target="_blank">Artturi Jalli</a> on <a href="https://unsplash.com/de/fotos/g5_rxRjvKmg" target="_blank">Unsplash</a>',
        "language" => "language-python",
        "code" => <<<EOD
def berechne_durchschnitt(notEN_liste):
    if len(notEN_liste) == 0:
        return 0
    return sum(notEN_liste) / len(notEN_liste)
    
def bewerte_note(durchschnitt):
    if durchschnitt <= 1.5:
        return "Sehr gut"
    elif durchschnitt <= 2.5:
        return "Gut"
    elif durchschnitt <= 3.5:
        return "Befriedigend"
    elif durchschnitt <= 4.5:
        return "Ausreichend"
    else:
        return "Nicht bestanden"
    
   
def main():
    print("Notenberechnung! (Schreibe ende für Programm beenden)")
    
    noten = []
    
    while True:
        benutzer_eingabe = input("Geben Sie ihre Note zwischen 1 - 6 ein!: ")
        
        if benutzer_eingabe.lower() == "ende":
            if noten:
                durchschnitt = berechne_durchschnitt(noten)
                bewertung = bewerte_note(durchschnitt)
                print(f"Durchschnitt: {durchschnitt:.2f}")
                print(f"Bewertung: {bewertung}")
            else:
                print("Es wurden keine Noten eingegeben")
            
            print("Programm beendet")
            break
        
        try:
            note = int(benutzer_eingabe)
            if note < 1 or note > 6:
                print("Bitte eine Note zwischen 1 und 6 eingeben")
                continue
          
            noten.append(note)
            
        except ValueError:
            print("Bitte eine gültige Zahl oder 'ende' eingeben!")
    


if __name__ == "__main__":
    main()
EOD
    ]
];