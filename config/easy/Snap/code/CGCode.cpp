#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int m;
    cin >> m; cin.ignore();
    for (int i = 0; i < m; i++) {
        string card;
        cin >> card; cin.ignore();
    }
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string card;
        cin >> card; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Winner: Player 1/Player 2" << endl;
    cout << "Number of cards" << endl;
}