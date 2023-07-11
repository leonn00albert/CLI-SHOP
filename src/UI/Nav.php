<?php
namespace UI;
class Nav {
// Function to clear the console
function clearConsole()
{
    // Linux and macOS
    if (strncasecmp(PHP_OS, 'WIN', 3) !== 0) {
        system('clear');
    }
    // Windows
    else {
        system('cls');
    }
}

// Function to display the menu options
function displayMenu()
{
    echo "=== CLI Shop ===" . PHP_EOL;
    echo "1. Show Products" . PHP_EOL;
    echo "2. Show Cart" . PHP_EOL;
    echo "3. Checkout" . PHP_EOL;
    echo "4. Exit" . PHP_EOL;
    echo "=====================" . PHP_EOL;
    echo "Enter your choice (1-4): ";
}

// Function to handle user input
function handleInput($choice)
{
    $this->clearConsole();

    switch ($choice) {
        case '1':
            echo "You selected Option 1." . PHP_EOL;
            // Add your logic for Option 1 here
            break;
        case '2':
            echo "You selected Option 2." . PHP_EOL;
            // Add your logic for Option 2 here
            break;
        case '3':
            echo "You selected Option 3." . PHP_EOL;
            // Add your logic for Option 3 here
            break;
        case '4':
            echo "Exiting the program. Goodbye!" . PHP_EOL;
            exit;
        default:
            echo "Invalid choice. Please try again." . PHP_EOL;
            break;
    }

    // Wait for user input before displaying the menu again
    echo PHP_EOL . "Press Enter to continue...";
    fgets(STDIN);
    $this->clearConsole();
    $this->displayMenu();
}


}

