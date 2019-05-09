import java.io.*;

class problem1
{
    public static void main(String arg[])throws IOException
    {
        int l,i,n;
        boolean flag = true;

        BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    //    System.out.println("Enter a number : ");
        String num = br.readLine();

        l = num.length();

        for(i = 0; i < l; i++){

            String str = num.substring(i,l) + num.substring(0,i);

            n = Integer.parseInt(str);

            if(!isPrime(n)){
                flag = false;
                break;
            }

        }

        if(flag)
            System.out.println("CIRCULAR PRIME");   
        else
           System.out.println("NOT A CIRCULAR PRIME");  
    }//end of main

   //Return true if number is prime else return false
    private static boolean isPrime(int p){

        for(int i = 2; i <= p/2; i++){
            if(p%i == 0)
                return false;
        }
        return true;

    }//end of isPrime

}//end of class