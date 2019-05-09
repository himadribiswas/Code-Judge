import java.util.*;
public class problem1{
	
	    public static void main(String args[]) {
	        int n = 0, temp = 0, r = 0, s = 0,fact=1;
	        Scanner in = new Scanner(System.in);
	//        System.out.println("Enter a number ");
   n = in.nextInt();
	      //  if (in.hasNextInt()) {
	          // if there is another number  
	        
	        temp = n;
	        while (n != 0) {
	            r = n % 10;
	            
	            for (int i = 1; i <= r; i++) {
					fact = fact * i;
				}
				
	            s = s + fact;
	            n = n / 10;
	            fact=1;
	        }
	        

	        if (temp == s) {
	            System.out.println("Yes");
	        } else {
	            System.out.println("No");
	        }
	    }
} 

