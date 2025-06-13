#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int w1;
    int h1;
    cin >> w1 >> h1; cin.ignore();
    for (int i = 0; i < h1; i++) {
        string row;
        getline(cin, row);
    }
    int w2;
    int h2;
    cin >> w2 >> h2; cin.ignore();
    for (int i = 0; i < h2; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "+----------+" << endl;
    cout << "|          |" << endl;
    cout << "|  *       |" << endl;
    cout << "| \|    *  |" << endl;
    cout << "|  |/   |/ |" << endl;
    cout << "|  |    |  |" << endl;
    cout << "| \|    |  |" << endl;
    cout << "+----------+" << endl;
}