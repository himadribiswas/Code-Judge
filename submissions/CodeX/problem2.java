import java.util.*;
public class problem2{
	
	    public static void main(String args[]) {
	        int n, r = 0, s=1;
	        Scanner in = new Scanner(System.in);
                n = in.nextInt();
	        
	
	        if (n%10==7 || n/7==0|| n%10==7 && n/7==0) {
	            System.out.println("Buzz");
	        } else {
	            System.out.println("Not Buzz");
	        }
	    }
} 