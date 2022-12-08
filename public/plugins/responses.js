function getBotResponse(input) {
    //rock paper scissors
    if (input == "whats fitchat?") {
        return "Fitchat, AI chatbot developed last November 2022 that aims to help users to have an idea of the best workout plans and diet combinations. Go and ask something about workout and diets, just press 1 for diet, and 2 for diet.";
    } else if (input == "whos your creator?") {
        return "The developers behind me are John Matthew Lirio, Jhon Mark Fuentes, and John Rey Tolosa, 2nd year CS students for Naga College Foundation, Inc.";
    } else if (input == "why fitchat?") {
        return "Creators: wala lang hahahhahahaha";
    }


    // Simple responses
    if (input == "hello") {
        return "yo wassup";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if (input == "I love Fitchat!") {
        return "Thank you! Ask something else please :)";
    } else if (input == "hi") {
        return "hello!";
    } else if (input == "hehe") {
        return "haha";
    }

    // preliminary responses
    if (input == "1") {
        // return workout();
        return "You chose dietary plan, good choice! What kind of plan are you aiming for?" + "Press [loss] if you want for weight loss    Press [gain] if you want for weight gain    Press [muscle] for muscle buildup";
    } else if (input == "2") {
        return "You chose workout plan, that's good! May I ask if what age range do you belong to?" + "[Young] 10 - 20  [Adult] 21 - 40  [Late Adult] 40+";
    } else if (input === "diet ") {
        return "You're quite naughty in answering huh? HAHAHA" + "Anyways, what kind of plan are you aiming for?" + "Press [loss] if you want for weight loss    Press [gain] if you want for weight gain    Press [muscle] for muscle buildup";
    } else if (input == "workout") {
        return "You're quite naughty in answering huh? HAHAHA" + "Anyways, may I ask if what age range do you belong to?" + "[Young] 10 - 20  [Adult] 21 - 40  [Late Adult] 40+ ";
    }

    // responses for dietary plan
    if (input == "loss") {
        return "wao " + "hahaha";
    } else if (input == "gain") {
        return "";
    }

    // responses for workout plan
    if (input == "young" | input == "Young" | input == "yang") {
        return "ambata pa hehe";
    } else if (input == "adult" | input == "Adult" | input == "tanda") {
        return "hi zaddy";
    } else if (input == "late adult" | input == "late") {
        return "lolo";
    }

    // if user input is != to responses
    else {
        return "Try asking something else!";
    }

   
}

