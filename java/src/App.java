import java.util.Scanner;

public class App {
    public static void main(String [] args) {

        Scanner kbdInput = new Scanner(System.in);
        System.out.println("Enter Name: ");
        String name = kbdInput.nextLine();
        System.out.println("Hey "+ name + "!");

    }
}
